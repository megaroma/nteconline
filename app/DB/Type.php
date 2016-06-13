<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

	protected $table = 'types';
	protected $fillable = array('name');

}