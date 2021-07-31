<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CallController extends Controller
{
   public function home(Request $request, $establishment){

    $sessions = $this->call('/api/sessions?establishment_id='.$establishment,$request->bearerToken() );

    $data['sessions'] = $sessions;
    return response($data);
   }
function call($url, $token){
    $request = Request::create($url, 'GET');
    $request->headers->add(['Authorization' => "Bearer {$token}"]);
    $response = app()->handle($request);
    $responseBody = json_decode($response->getContent(), true);
    return $responseBody;
}

}