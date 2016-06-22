<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\DB\Course;
use App\DB\Category;
use App\DB\Lecture;
use App\DB\Type;
use App\DB\Page;

class CoursesController extends Controller
{
    public function anyIndex() {
    	$data = array();
    	$data['categories'] = Category::all();
    	$data['courses'] = Course::all();
		return view('courses',$data);
    }


    public function anySearch($id) {
    	$data = array();
    	$data['categories'] = Category::all();
    	$data['courses'] = Course::where("category_id","=",$id)->get();
		return view('courses',$data);    	
    }

}
