<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	protected $table = 'pages';
	protected $fillable = array('name','lecture_id','quiz_id','type_id','url','index','description');

}