<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\Models\RegistrationModel;
use App\Models\PhonebookModel;

class LoginController extends Controller
{
    function test(){
        return "token OK";
    }

    function login(Request $request){
        
        $username = $request->input('username');
        $password = $request->input('password');

        $count=RegistrationModel::where(['username' => $username, 'password' => $password])->count();
        if ($count==1){

            $key = env ('TOKEN_KEY');
        $payload = array(
            "site" => "http://example.org",
            "user" => $username,
            "iat" => time(),
            "exp" => time()+200
        );
            $jwt = JWT::encode($payload, $key);
            return response()->json(['Token'=>$jwt, 'status'=>'login success']);

            
        }
        else{
            return "login failed";
        }
    }
}
