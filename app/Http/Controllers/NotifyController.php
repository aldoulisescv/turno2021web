<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class NotifyController extends Controller
{
    public function getTokenIdsUsers($user_ids){
        $items = User::whereIn('id', $user_ids)->whereNotNull('api_token')->get();
        $items= array_column($items->toArray(),'api_token');
        return $items;
    }

    public function notify($title,$body,$target,$chid, $img){

        define( 'API_ACCESS_KEY', 'AAAAVR-fC_k:APA91bGOh7nJUNZKH72i1BtDGdJ2zyza-jl3FeqAIOplZylWoZt-_Xb1C8wXVXg_pq1rFjb2PJs_F-CuPzdfoP9NeHhdZZNU89pD14reiQbnGEsU1YWpIkMwh7DLDKc1-z6yjsVKz-JX' );

        $fcmMsg = array(
            'title' => $title,
            'body' => $body,
            'android_channel_id' => $chid,
            'image' => $img,
        );
        $fcmFields = array(
            'registration_ids' => $target, //tokens sending for notification
            'notification' => $fcmMsg,

        );
        $headers = array(
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, true );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fcmFields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        // echo $result . "\n\n";
        return $result ;

    }
    public function enviarNotificacion(){
        // $credentials = realpath(__DIR__ . '/../../..');
        // $factory = (new Factory)->withServiceAccount($credentials.'/firebase_credentials_turno.json');
        // dd($factory);
        $deviceToken = 'd-x-84EzTqaUXZ74AoyV3c:APA91bEoBhPCrQ9VM5ja0nEcBrkK69SurfWlzRF7-1uJ6YxE3mU-ZY2quYBe_etzvLhD-seFEgxtKP5JTNsAvTA8AW5nNN3oimxV8yA4C34VRRMA2TXUiycrSIGbtQONr1SLTc-LtTGP';
        $title = 'My Notification Title';
        $body = 'My Notification Body';
        $imageUrl = 'http://lorempixel.com/400/200/';
        $channel = 'high_importance_channel';
        $super_admins = User::whereHas(
            'roles', function($q){
                $q->where('name', 'super_admin');
            }
        )->get();
        $users = array_column($super_admins->toArray(), 'id');
        $tokens = $this->getTokenIdsUsers($users);
        $message = $this->notify($title, $body, $tokens, $channel, $imageUrl);
        return response()->json(json_decode($message));
    }
}
