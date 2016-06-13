<?php
namespace App\DB;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model {

	protected $table = 'quizzes';
	protected $fillable = array('name');

}