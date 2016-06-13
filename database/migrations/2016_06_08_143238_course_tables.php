<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\DB\Course;
use App\DB\Category;
use App\DB\Lecture;
use App\DB\Type;
use App\DB\Page;

class CourseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('user_id');
            $table->text('description');
            $table->string('image');
            $table->string('length');
            $table->string('cost');
            $table->string('effort');
            $table->string('level');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('category_course', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->integer('category_id');
            $table->timestamps();
        });

       Schema::create('lectures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->string('name');
            $table->integer('index');
            $table->timestamps();
        });

       Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('lecture_id');
            $table->integer('quiz_id');
            $table->integer('type_id');
            $table->string('url');
            $table->integer('index');
            $table->text('description');
            $table->timestamps();
        });
        
       Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

       Schema::create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

       Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->timestamps();
        });


        Schema::table('users', function (Blueprint $table) {
            $table->integer('validated')->default(0);
        });




        $user = User::where("email","tiz0000346@myntec.ac.nz")->first();
        $user->validated = 1;
        $user->save();


        $course_data = array(
            "name" => "Introduction to Biology - The Secret of Life",
            "user_id" => $user->id,
            "description" => "Welcome to the MIT Department of Biology's Introduction to Biology, 7.00x: The Secret of Life. In this course, you will discover the fundamental principles of modern biology and how biologists study genes, proteins, and human disease. ",
            "image" => "https://d37djvu3ytnwxt.cloudfront.net/asset-v1:MITx+7.00x_3+2T2015+type@thumbnail+block@images_course_image-375x200.jpg",
            "length" => "10 weeks",
            "cost" => "0",
            "effort" => "7",
            "level" => "7"
            );

        $course = Course::create($course_data);

        Category::create(array("name"=>"Linguistics and languages"));
        Category::create(array("name"=>"Visual arts"));
        Category::create(array("name"=>"Archaeology"));
        Category::create(array("name"=>"Economics"));
        Category::create(array("name"=>"Geography"));
        $bio_category = Category::create(array("name"=>"Biology"));
        Category::create(array("name"=>"Chemistry"));
        Category::create(array("name"=>"Physics"));
        Category::create(array("name"=>"Computer sciences"));
        Category::create(array("name"=>"Mathematics"));
        Category::create(array("name"=>"Systems science"));
        Category::create(array("name"=>"Agriculture"));
        Category::create(array("name"=>"Architecture and design"));
        Category::create(array("name"=>"Business"));
        Category::create(array("name"=>"Engineering and technology"));

        $course->categories()->attach($bio_category->id);


        $type_video = Type::create(array("name" => "video"));
        Type::create(array("name" => "quiz"));
        Type::create(array("name" => "picture"));


        $l1 = Lecture::create(array(
            "name"=>"Lecture 1: Introduction to Biology",
            "course_id" => $course->id,
            "index" => "1"
            ));

        Page::create(
            array(
            'lecture_id' => $l1->id,
            'name' => "Medical revolutions in Biology",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-G010101_100.mp4",
            'index' => "1",
            'description' => ""
                )
            );

        Page::create(
            array(
            'lecture_id' => $l1->id,
            'name' => "Biological applications ",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-G010201_100.mp4",
            'index' => "2",
            'description' => ""
                )
            );

        Page::create(
            array(
            'lecture_id' => $l1->id,
            'name' => "The diversity of life",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://d2f1egay8yehza.cloudfront.net/mit-700/MIT700XXT313-V000400_DTH.mp4",
            'index' => "3",
            'description' => ""
                )
            );        

        $l2 = Lecture::create(array(
            "name"=>"Lecture 2 – Biochemistry of Life",
            "course_id" => $course->id,
            "index" => "2"
            ));

        Page::create(
            array(
            'lecture_id' => $l2->id,
            'name' => "Fractionating life",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-G020100_100.mp4",
            'index' => "1",
            'description' => ""
                )
            );

        Page::create(
            array(
            'lecture_id' => $l2->id,
            'name' => "Molecular composition of cells",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-G020200_100.mp4",
            'index' => "2",
            'description' => ""
                )
            );

        Page::create(
            array(
            'lecture_id' => $l2->id,
            'name' => "Covalent bonds",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-G020300_100.mp4",
            'index' => "3",
            'description' => ""
                )
            );        

        $l3 = Lecture::create(array(
            "name"=>"Deep Dives",
            "course_id" => $course->id,
            "index" => "3"
            ));

        Page::create(
            array(
            'lecture_id' => $l3->id,
            'name' => "Reading Chemical Structures",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-H030102_100.mp4",
            'index' => "1",
            'description' => ""
                )
            );

        Page::create(
            array(
            'lecture_id' => $l3->id,
            'name' => "Polarity of Molecules",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-H030202_100.mp4",
            'index' => "2",
            'description' => ""
                )
            );
        Page::create(
            array(
            'lecture_id' => $l3->id,
            'name' => "Intermolecular Bonding",
            'quiz_id' => "",
            'type_id' => $type_video->id,
            'url' => "https://s3.amazonaws.com/edx-course-videos/mit-700/MIT700XXSP13-H030302_100.mp4",
            'index' => "3",
            'description' => ""
                )
            ); 

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
        Schema::drop('categories');
        Schema::drop('categories_courses');
        Schema::drop('lectures');
        Schema::drop('pages');
        Schema::drop('quiz');
        Schema::drop('types');
        Schema::drop('materials');

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('validated');
        });


    }
}
