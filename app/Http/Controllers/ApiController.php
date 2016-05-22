<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\API\Core as api;
use App\DB\User_login;
use App\DB\Package;
use App\DB\Vault;

class ApiController extends Controller
{


    public function getIndex()
    {
        api::log("Index request");
        return "API V1.0";
    }

    public function getEcho() {
        api::log("echo request");
        return response()->json($_GET);
    }

    public function getTest(Request $request) {
        api::log("Test request",$_GET);
        $api_id = $request->input('api_id','');
        if(api::check_api_id($api_id)) {
            $data = array(
                'status' => 1,
                'message' => 'ok',
                'token' => csrf_token()
                );
        } else {
            $data = array(
                'status' => 5,
                'message' => 'error'
                );
        }
        api::log("Test request result:",$data);
        return response()->json($data);
    }

    public function anyLogin(Request $request) {
        api::log("login request",$_POST);
        $api_id = $request->input('api_id','');
        if(api::check_api_id($api_id)) {
            $username = $request->input('username','');
            $password = $request->input('password','');
            $error = false;
            $message = "ok";
            $session_id = '1';
            if(($username != '') && ($password != '')) {
                $user = User::where('loginname','=',trim($username))->get();
                if($user->count() > 0) {
                    $db_password = $user[0]->loginpasswd;
                    if(\Hash::check($password, $db_password)) {
                        $session_id = api::get_session_id();
                        $user_login = new User_login();
                        $user_login->login_datetime = date("Y-m-d H:i:s",strtotime("NOW"));
                        $user_login->user_id = $user[0]->id;
                        $user_login->session_id = $session_id;
                        $user_login->save();

                    } else {
                        $message = "Password is incorect $password ";
                        $error = true;
                    }
                } else {
                    $message = "User is not found";
                    $error = true;
                }
            } else {
                $message = "Username or Password is empty";
                $error = true;
            }

            if($error) {
            $data = array(
                'status' => 2,
                'message' => $message,
                'token' => csrf_token()
                );                
            } else {
                $data = array(
                    'status' => 1,
                    'message' => 'ok',
                    'session_id' => $session_id,
                    'token' => csrf_token()
                    );
            }
        } else {
            $data = array(
                'status' => 5,
                'message' => 'error'
                );
        }

        api::log("Login request result:",$data);
        return response()->json($data);

    }


    public function anyStatus(Request $request) {
        api::log("status request",$_POST);
        $api_id = $request->input('api_id','');
        $username = $request->input('username','');
        $session_id = $request->input('session_id','');
        if(api::check_status($api_id,$username,$session_id)) {
            $data = array(
                'status' => 1,
                'message' => "Ok",
                'token' => csrf_token()
                );                            
        } else {
            $data = array(
                'status' => 2,
                'message' => "Error",
                'token' => csrf_token()
                );                            
        }
        api::log("Status request result:",$data);
        return response()->json($data);        
    }

    /*
    public function anyGetpackages(Request $request) {
        api::log("Packages request",$_POST);
        $api_id = $request->input('api_id','');
        $username = $request->input('username','');
        $session_id = $request->input('session_id','');
        if(api::check_status($api_id,$username,$session_id)) {
            $packages = Package::All();
            $data = array(
                'status' => 1,
                'message' => "Ok",
                'packages' => $packages,
                'token' => csrf_token()
                );                            
        } else {
            $data = array(
                'status' => 2,
                'message' => "Error",
                'token' => csrf_token()
                );                            
        }
        api::log("Packages request result:",$data);
        return response()->json($data);                
    }

    public function anyGetvaults(Request $request) {
        api::log("Vaults request",$_POST);
        $api_id = $request->input('api_id','');
        $username = $request->input('username','');
        $session_id = $request->input('session_id','');
        $package_id = $request->input('package_id','');

        if(api::check_status($api_id,$username,$session_id)) {
            $vaults = Vault::where('package_id','=',$package_id)->get()->all();
            $data = array(
                'status' => 1,
                'message' => "Ok",
                'vaults' => $vaults,
                'token' => csrf_token()
                );                            
        } else {
            $data = array(
                'status' => 2,
                'message' => "Error",
                'token' => csrf_token()
                );                            
        }
        api::log("Vaults request result:",$data);
        return response()->json($data);                
    }

    public function anySavegps(Request $request) {
        api::log("Save gps request",$_POST);
        $api_id = $request->input('api_id','');
        $username = $request->input('username','');
        $session_id = $request->input('session_id','');
        $vault_id = $request->input('vault_id','');
        $gps_lat = $request->input('gps_lat','');
        $gps_long = $request->input('gps_long','');

        if(api::check_status($api_id,$username,$session_id)) {
            $vault = Vault::find($vault_id);
            $vault->lat = $gps_lat;
            $vault->long = $gps_long;
            $vault->save();
            $data = array(
                'status' => 1,
                'message' => "Ok",
                'token' => csrf_token()
                );                            
        } else {
            $data = array(
                'status' => 2,
                'message' => "Error",
                'token' => csrf_token()
                );                            
        }
        api::log("Save gps request result:",$data);
        return response()->json($data);                
    }

    public function anySetvaultname(Request $request) {
        api::log("Change vault name request",$_POST);
        $api_id = $request->input('api_id','');
        $username = $request->input('username','');
        $session_id = $request->input('session_id','');
        $vault_id = $request->input('vault_id','');
        $vault_name = $request->input('vault_name','');
        if(api::check_status($api_id,$username,$session_id)) {
            $vault = Vault::find($vault_id);
            $vault->name = $vault_name;
            $vault->save();
            $data = array(
                'status' => 1,
                'message' => "Ok",
                'token' => csrf_token()
                );                            
        } else {
            $data = array(
                'status' => 2,
                'message' => "Error",
                'token' => csrf_token()
                );                            
        }
        api::log("Change vault name request result:",$data);
        return response()->json($data);              

    }

    public function anyNewvault(Request $request) {
        api::log("New vault request",$_POST);
        $api_id = $request->input('api_id','');
        $username = $request->input('username','');
        $session_id = $request->input('session_id','');
        $gps_lat = $request->input('gps_lat','');
        $gps_long = $request->input('gps_long','');
        $vault_name = $request->input('vault_name','');
        $package_id = $request->input('package_id','');
        if(api::check_status($api_id,$username,$session_id)) {
            $vault = new Vault ();
            $vault->name = $vault_name;
            $vault->lat = $gps_lat;
            $vault->long = $gps_long;            
            $vault->package_id = $package_id;            
            $vault->save();
            $data = array(
                'status' => 1,
                'message' => "Ok",
                'token' => csrf_token(),
                'vault_id' => $vault->id
                );                            
        } else {
            $data = array(
                'status' => 2,
                'message' => "Error",
                'token' => csrf_token()
                );                            
        }
        api::log("New vault request result:",$data);
        return response()->json($data);              

    }    


    public function anyDeletevault(Request $request) {
        api::log("Delete vault request",$_POST);
        $api_id = $request->input('api_id','');
        $username = $request->input('username','');
        $session_id = $request->input('session_id','');
        $vault_id = $request->input('vault_id','');
        if(api::check_status($api_id,$username,$session_id)) {
            $vault = Vault::find($vault_id);
            $vault->delete();
            $data = array(
                'status' => 1,
                'message' => "Ok",
                'token' => csrf_token()
                );                            
        } else {
            $data = array(
                'status' => 2,
                'message' => "Error",
                'token' => csrf_token()
                );                            
        }
        api::log("Delete vault request result:",$data);
        return response()->json($data);              

    }
*/
}
