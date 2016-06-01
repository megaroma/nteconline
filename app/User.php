<?php

namespace App;

use Illuminate\Auth\Authenticatable;
//use Illuminate\Database\Eloquent\Model;
use DD\Crud\CrudModel as Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DD\Crud\Classes\Crud;
use DB;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


public static function get_list($filters,$order,$sort,$page) {
    $order_sql = Crud::get_order_sql($sort,$order,'name');
    $limit_sql = Crud::get_limit_sql($page);
    $filters_sql = Crud::get_filters_sql($filters);

    $results = DB::select(
    '
    SELECT SQL_CALC_FOUND_ROWS
      *,
      (select GROUP_CONCAT(r.name) from roles r, users_roles ur where ur.role_id = r.id and ur.user_id = u.id) as roles
    FROM
      users u
    WHERE 
      1 AND
    '.$filters_sql.' 
    '.$order_sql.'
    '.$limit_sql
    );

    $res_total = DB::select("select FOUND_ROWS()  as total");

    return array(
      'list' =>  json_decode(json_encode($results), true) ,
      'total' => $res_total[0]->total 
    );

  } 


    public function roles() {
        return $this->belongsToMany('App\DB\Role');
    }    

    public function hasRole($check) {
        return in_array($check, array_pluck($this->roles->toArray(), 'name'));
    }

}
