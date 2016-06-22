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
    	$category = Category::find($id);
    	$data['courses'] = $category->courses->all();
    	
		return view('courses',$data);    	
    }


    public function anyOpen($course_id) {
        session_start();
    	$data = array();
        $data['course_id'] = $course_id;

        if(isset($_POST['enrollme'])) {
            $_SESSION['course'.$course_id] = true;
        }


    	$data['course'] = Course::find($course_id);
		return view('coursepage',$data);    	

    }


    public function anyEnrolled($course_id,$lecture_id = 1) {
        $data = array();
        $data['course_id'] = $course_id;
        $data['lecture_id'] = $lecture_id;
        $data['lectures'] = Lecture::where("course_id",$course_id)->get();

        if($lecture_id == 13 ) {
            return view('quiz',$data);
        }

        $data['pages'] = Page::where("lecture_id",$lecture_id)->get();


        return view('entolledcourse',$data);
    }


}
