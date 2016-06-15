<?php
namespace App\DB;

use DD\Crud\CrudModel as Model;

class Role extends Model {

	protected $table = 'roles';
	protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany('App\User','user_role');
    }

}