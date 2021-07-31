<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Establishment;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendPassMail;
use App\Http\Controllers\CronController;
class AuthController extends  AppBaseController
{
    public function register(Request $request)
    {
        $input = $request->all();
        if(isset($input['sendemailpass']) && $input['sendemailpass']){
            $estab = Establishment::find($input['establishment_id']);
            $mailData = array(
                'estabname'     => $estab->name,
                'name'     => $input['name'] . ' ' . $input['lastname'] ,
                'email'     => $input['email'],
                'phone'     => $input['phone'],
                'pass'     => $input['password'],
               );
            Mail::to($input['email'])->send(new SendPassMail($mailData));

           
        }
        $validator = Validator::make($request->all(), array(
            
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_name' => ['required', 'string',  'max:255', 'unique:users'],
            'phone' => ['required', 'string',  'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ));
        if ($validator->fails()) {
            $messages = $validator->messages();
            $result='';
            $cuenta=0;
            foreach ($messages->all() as $message){
                $result.=$message.',';
                $cuenta++;
            }
            return response(['success'=>false, 'message'=>$result , 'cuenta'=>$cuenta]);
        }else{
            $input = $request->all();
            $input['password'] = Hash::make($input['password']);
            $input['privacy_notice'] = $input['terms'];
            $user = User::create($input);
            if($input['role'])
                $user->assignRole($input['role']);
            $user->sendEmailVerificationNotification();

            $super_admins = User::whereHas(
                'roles', function($q){
                    $q->where('name', 'super_admin');
                }
            )->get();
            $users = array_column($super_admins->toArray(), 'id');
            $cnt = new NotifyController;
            $tokens = $cnt->getTokenIdsUsers($users);
            $message = $cnt->notify('Nuevo Usuario', $user->email, $tokens, 'high_importance_channel', null);
            return response([ 'success'=>true,'data' => $user]);
        }
        
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return $this->sendError(
                'Credenciales Inválidas', 200
            );
        } 
        $user =auth()->user();
        if($user->email_verified_at==''){
            return $this->sendError(
                'Usuario no verificado', 200
            );
        }
        if(!$user->hasRole(['super_admin','admin','preadmin'])){
            return $this->sendError(
                'Usuario sin permisos para esta aplicación', 200
            );
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        $user['access_token']  = $accessToken;
        return response(['success'=>true,'data' => $user]);

    }
    public function logout()
    {        
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        return response(['message' => 'Successfully logged out']);
    }
    public function outwelcome($message)
    {        
        dd($message);
        if (Auth::check()) {
            Auth::user()->AauthAcessToken()->delete();
        }
        if ($message) {
            return redirect('welcome')->with($message);
        }
        return response(['message' => 'Successfully logged out']);
    }
}