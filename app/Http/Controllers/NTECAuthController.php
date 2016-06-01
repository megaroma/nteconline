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
            $data['status'] = "ok";
        } else {
            sleep(2);
            $data['status'] = 'error';
        }
        return response()->json($data);
    }

    public function getLogout() {
        \Auth::logout();
        $data['status'] = "ok";
        return response()->json($data);
    }

}
