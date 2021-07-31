<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turno;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CronController extends Controller
{
    public function every5minutes(){
        try {

            $time = date('h:i');
            $date = date('y-m-d');
            $this->aviso30minAntes();
            // $menos5 =date("H:i", strtotime ( '-5 minutes' , strtotime ($time) ) );        
            // $turnos =  Turno::where('date', '=', $date)
            //             ->whereTime('start_time', '<=', \Carbon\Carbon::parse($time))
            //             ->whereTime('start_time', '>', \Carbon\Carbon::parse($menos5))
            //             ->where('status_turno_id', 3)
            //             ->get();
            // $idturnos = array_column($turnos->toArray(), 'id');
            
            // print_r($date.' '.$time.' '.json_encode($idturnos));
            // if(count($idturnos) >0){
            //     $jsonIdTurnos = (json_encode($idturnos));
            //     \Storage::disk('local')->append('file.txt', $date.' '.$time.' '.$jsonIdTurnos);
            // }
        } catch (\Throwable $e) {
            echo $e->getMessage();
            \Storage::disk('local')->append('file.txt', $date.' '.$time.' '.$e->getMessage());
        }
        return ;
    }
    public function aviso30minAntes(){
            // $time = date('h:i', strtotime('11:15'));
            // $date = date('Y-m-d', strtotime('2021-07-31'));
            $time = date('h:i');
            $date = date('Y-m-d');
            $mas30 = date("H:i", strtotime ( '+30 minutes' , strtotime ($time) ) );
            $mas25 =date("H:i", strtotime ( '+25 minutes' , strtotime ($time) ) );        
            $turnos =  Turno::where('date', '=', $date)
                        ->whereTime('start_time', '<=', \Carbon\Carbon::parse($mas30))
                        ->whereTime('start_time', '>', \Carbon\Carbon::parse($mas25))
                        ->where('status_turno_id', 3)
                        ->get();
            $idturnos = array_column($turnos->toArray(), 'id');
            $userids = array_column($turnos->toArray(), 'user_id');
            $ntify = new NotifyController;
            $tokens = $ntify->getTokenIdsUsers($userids);
            $message = $ntify->notify('Turno Próximo', 'Dentro de 30 minutos tienes un turno por atender', $tokens, 'high_importance_channel', null);
            if(count($idturnos) >0){
                $jsonIdTurnos = (json_encode($idturnos));
                \Storage::disk('local')->append('file.txt', $date.' '.$time.' '.$jsonIdTurnos);
            }
    }
    
    
}
