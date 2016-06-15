<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model {

	protected $table = 'categories';
	protected $fillable = array('name','description');

    public function courses()
    {
        return $this->belongsToMany('App\DB\Course');
    }

    public function countCourses() {
    	return DB::table('category_course')->where('category_id', '=', $this->id)->count();
    }

}