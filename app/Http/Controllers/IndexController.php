<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\DB\Role;
use App\DB\Course;
use App\DB\Category;
use App\DB\Lecture;
use App\DB\Type;
use App\DB\Page;
use Mail;

class IndexController extends Controller
{
    
	public function anyIndex() {
		$data = array();
		$data['courses'] = Course::all();
		return view('index',$data);
	}

	public function postRegister(Request $request) {
		$data = $request->all();
		$data['message'] = "";
   		$data['errors'] = array();

     	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'student_id' => 'required_if:optionsRole,student'
        ]);

       if ($validator->fails()) {
       		$data['errors'] = $validator->errors()->all();
        } else {
       		$new_user =  array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>  \Hash::make($request->input('password')),
            'student_id' => $request->input('student_id')
            );
       		$user = User::create($new_user);
       		$role = Role::where('name', $request->input('optionsRole'))->first();
       		$user->roles()->attach($role->id);
       		$data['message'] = "registrated";
        }

		return view('register',$data);
	}


	public function getRegister() {
		if(\Auth::check()) {
			return redirect('/');
		}
		$data = array();
		$data['email'] = "";
		$data['name'] = "";
		$data['optionsRole'] = "student";
		$data['student_id'] = "";
		$data['errors'] = array();
		$data['message'] = "";
		return view('register',$data);
	}


	public function anyContactus(Request $request) {
		$data = array();
		$i = array();
		$i['name'] = $request->input("name","");
		$i['surname'] = $request->input("surname","");
		$i['email'] = $request->input("email","");
		$i['phone'] = $request->input("phone","");
		$i['message'] = $request->input("message","");

		if(($i['email'] != "") && ($i['message'] != "")) {


			Mail::send('emails.feedback', ['key' => 'value'], function($message)
			{
				$message->from('us@example.com', 'Laravel');
    			$message->to('darkromanovich@gmail.com', 'John Smith')->subject('Welcome!');
			});
		}

		return view('contactus',$data);
	}

}
