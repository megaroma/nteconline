<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model {

	protected $table = 'lectures';
	protected $fillable = array('course_id','name','index');

}