<?php

namespace App\Http\Controllers;
use Firebase\JWT\JWT;
use App\Models\PhonebookModel;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    function insert(Request $request){

        $token = $request->input('access_token');
        $key = env('TOKEN_KEY');
        $decoded = JWT::decode($token, $key, array('HS256'));

        $decoded_array = (array)$decoded;

        $user = $decoded_array['user'];
        $one = $request->input('one');
        $two = $request->input('two');
        $name = $request->input('name');
        $email = $request->input('email');

        $result = PhonebookModel::insert([
            'user_name'=>$user,
            'phone_number_one'=>$one,
            'phone_number_two'=>$two,
            'name'=>$name,
            'email'=>$email,
        ]);

        if ($result==true){
            return "save done";

        }
        else {
            return "fail";
        }
    }
    function update(Request $request){

    }
    function delete(Request $request){

    }
    function select(Request $request){

    }
}
