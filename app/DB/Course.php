<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $table = 'courses';
	protected $fillable = array('name','user_id','description','image','length','cost','effort','level');

    public function categories()
    {
        return $this->belongsToMany('App\DB\Category');
    }

}