<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Material extends Model {

	protected $table = 'materials';
	protected $fillable = array('name','url');

}