<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    
	public function anyIndex() {
		$data = array();
		return view('index',$data);
	}


	public function anyTest() {
		$data = array();
		return view('test',$data);
	}


	public function anyCoursepage() {
		$data = array();
		return view('coursepage',$data);
	}


}
