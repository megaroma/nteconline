<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    
	public function anyIndex() {
		$data = array();
		return view('index',$data);
	}


	public function anyRegister() {
		$data = array();
		return view('register',$data);
	}

}
