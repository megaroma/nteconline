<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\DB\Role;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password',60);
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->timestamps();
        });        
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('role_id');
            $table->timestamps();
        });           

       $admin =  array(
            'name' => "Roman Fominykh",
            'email' => "tiz0000346@myntec.ac.nz",
            'password' =>  \Hash::make("wannagethigh")
            );
       $user = User::create($admin);

       $admin_role = array(
            'name' => "admin"
        );
       $role = Role::create($admin_role);
       $user->roles()->attach($role->id);

       $role = Role::create(array('name' => 'user'));
       $user->roles()->attach($role->id);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
       Schema::drop('roles');
        Schema::drop('role_user');        
    }
}
