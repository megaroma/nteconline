<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DB\Course;
use App\DB\Lecture;
use App\DB\Page;
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

	public function anyCourses() {
		$data = array();
		return view('courses',$data);
	}
	
	public function anyEntolledcourse() {
		$data = array();
		return view('entolledcourse',$data);
	}


	public function anyApi() {
		$course_id = 1;
		$lectures = Lecture::where('course_id','=',$course_id)->get()->all();

		$lectures_data = array();
		foreach($lectures as $l) {
			$pages = Page::where('lecture_id',$l->id)->get()->all();
			$pages_data = array();
			foreach($pages as $p) {
				$pages_data[] = array(
					'name' => $p->name,
					'type_id' => $p->type_id,
					'url' => $p->url,
					'index' => $p->index,
					'description' => $p->description
					);
			}
			$lectures_data[] = array(
				'id' => $l->id,
				'course_id' => $l->course_id,
				'name' => $l->name,
				'index' => $l->index,
				'pages' => $pages_data
				);
		}

		print_r($lectures_data);
	}

}
