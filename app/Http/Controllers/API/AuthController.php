<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

class AuthController extends  AppBaseController
{
    public function register(Request $request)
    {
        
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
}