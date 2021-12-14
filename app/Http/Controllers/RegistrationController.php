<?php

namespace App\Http\Controllers;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use App\Models\RegistrationModel;

class RegistrationController extends Controller
{
    function Register(Request $request){
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $city = $request->input('city');
        $username =$request->input('username');
        $password = $request->input('password');
        $gender = $request->input('gender');

        $count=RegistrationModel::where('username',$username)->count();

        if($count!=0){
            return "user already exists";
        }
        else{
            $request=RegistrationModel::insert([
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'city'=>$city,
                'username'=>$username,
                'password'=>$password,
                'gender'=>$gender,
            ]);
        if($request==true){
            return 'registration successful';

        }
        else{
            return "registration failed";
        }
        
        }

    }
}
