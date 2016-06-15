<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\DB\Role;
class TutorRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       $tutor_role = array(
            'name' => "tutor"
        );
       Role::create($tutor_role);
       $student_role = array(
            'name' => "student"
        );
       Role::create($student_role);       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
