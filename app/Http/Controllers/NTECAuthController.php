<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NTECAuthController extends Controller
{

    public function postLogin(Request $request) {
    	$email = $request->input('ntec-auth-email','');
    	$password = $request->input('ntec-auth-password','');
    	$remember = $request->has('ntec-auth-remember');
        $data = array();
        if (\Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            $user = \Auth::user();
            if($user->validated == "1") {
                $data['status'] = "ok";
            } else {
                \Auth::logout();
                $data['status'] = "not_validated";
            }

        } else {
            sleep(2);
            $data['status'] = 'error';
        }
        return response()->json($data);
    }

    public function getLogout(Request $request) {
        \Auth::logout();
            if($request->ajax()){
                $data['status'] = "ok";
                $data['url'] = url("/");
                return response()->json($data);
            } else {
                return redirect('/');
            }


    }

}
