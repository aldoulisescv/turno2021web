<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CallController extends Controller{
    public function home(Request $request, $establishment){
        try{
            $data['sessions'] = $this->call('/api/sessions?establishment_id='.$establishment,$request->bearerToken() );
            $data['settings'] = $this->call('/api/establishments/'.$establishment,$request->bearerToken());
            $data['resources'] = $this->call('/api/resources?enabled=1&establishment_id='.$establishment,$request->bearerToken());
            
            foreach ($data['resources'] as $key => $value) {
                $data['special_regions'][$value['id']]=$this->call('/api/schedules?resource_id='.$value['id'],$request->bearerToken());
                $data['turnos_agendados'][$value['id']]=$this->call('/api/turnos?status_turno_id=3&resource_id='.$value['id'].'&from='.date('Y-m-01').'&to='.date("Y-m-t"),$request->bearerToken());
                $data['turnos_atendiendo'][$value['id']]=$this->call('/api/turnos?status_turno_id=6&resource_id='.$value['id'].'&from='.date('Y-m-01').'&to='.date("Y-m-t"),$request->bearerToken());
            }
            $res['success']=true;
            $res['data']=$data;
            return response($res);
        } catch (\Throwable $e) {
            $res['success']=false;
            $res['data']=[];
            $res['message']=$e->getMessage();
            return response($res);
        }
    }
    public function viewchange(Request $request, $establishment){
        try{
            $from= $request->input('from');
            $to= $request->input('to');
            $blocked= $request->input('blocked');
            $resources = $this->call('/api/resources?enabled=1&establishment_id='.$establishment,$request->bearerToken());
            foreach ($resources as $key => $value) {
                $turnos_agendados=$this->call('/api/turnos?status_turno_id=3&resource_id='.$value['id'].'&from='.$from.'&to='.$to,$request->bearerToken());
                $turnos_atendiendo=$this->call('/api/turnos?status_turno_id=6&resource_id='.$value['id'].'&from='.$from.'&to='.$to,$request->bearerToken());
                $data['turnos'][$value['id']] =array_merge($turnos_agendados, $turnos_atendiendo);
            
            }
            // dd($blocked);
            if($blocked=='true')
                $data['blocked_dates'] = $this->call('/api/blocked_dates?from='.$from.'&to='.$to,$request->bearerToken());
            $res['data']=$data;
            $res['success']=true;
            return response($res);
        } catch (\Throwable $e) {
            $res['success']=false;
            $res['data']=[];
            $res['message']=$e->getMessage();
            return response($res);
        }
    }
    function call($url, $token){
        $request = Request::create($url, 'GET');
        $request->headers->add(['Authorization' => "Bearer {$token}"]);
        $response = app()->handle($request);
        $responseBody = json_decode($response->getContent(), true);
        if($responseBody['success']){
            return $responseBody['data'];
        }else{
            return null;
        }
    }

}