<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	protected $fillable = array('name','description');

    public function courses()
    {
        return $this->belongsToMany('App\DB\Course');
    }

}