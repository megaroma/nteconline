<?php
namespace App\API;
use App\DB\User_login;
use App\User;
use Log;

class Core {
	private static $api_id = 'NTEC_API_V1_2016_356BVG';
        private static $logging = false;

        public static function log($text,$arr = array()) {
                if(self::$logging) {
                        if(count($arr) > 0 ) {
                                Log::info($text,$arr);
                        } else {
                                Log::info($text);
                        }
                }        
                return true;
        }

	public static function check_api_id($api_id) {
		return ($api_id == self::$api_id);
	}

	public static function get_session_id() {
		$rand = openssl_random_pseudo_bytes(32);
		return substr(bin2hex($rand ), 0, 32);
	}

	public static function check_status($api_id,$username,$session_id) {
		$status = true;
		if(!self::check_api_id($api_id)) {
			$status = false;
		}

		$user = User::where('loginname','=',trim($username))->get();
        if($user->count() > 0) {
        	$user_id = $user[0]->id;
        	$user_logins = User_login::where('user_id' ,'=',$user_id)->orderBy('login_datetime', 'desc')->get();
        	if($user_logins->count() > 0) {
        		$user_login = $user_logins[0];
        		if($user_login->session_id == $session_id ) {
        			$user_login->login_datetime = date("Y-m-d H:i:s",strtotime("NOW"));
        			$user_login->save();
        		} else {
        			$status = false;	
        		}
        	} else {
        		$status = false;
        	}
        } else {
        	$status = false;
        }

        return $status;
	}	

}