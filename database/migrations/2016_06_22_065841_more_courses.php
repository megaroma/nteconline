<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;
use App\DB\Course;
use App\DB\Category;
use App\DB\Lecture;
use App\DB\Type;
use App\DB\Page;

class MoreCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        $user = User::where("email","tiz0000346@myntec.ac.nz")->first();

        $category = Category::where("name","Linguistics and languages")->first();

        $course_data = array(
            "name" => "Basic Mandarin Chinese – Level 1",
            "user_id" => $user->id,
            "description" => "Introductory Mandarin is the first in a series of six courses designed to teach you how to speak Mandarin Chinese. This course will introduce you to the basic language you will need to eat, live, and get around in Mandarin speaking countries.",
            "image" => "https://www.edx.org/sites/default/files/course/image/promoted/mx101x-course_card_image-378x225.jpg",
            "length" => "6 weeks",
            "cost" => "0",
            "effort" => "5",
            "level" => "7"
            );

        $course = Course::create($course_data);
        $course->categories()->attach($category->id);


       $course_data = array(
            "name" => "English Grammar and Style",
            "user_id" => $user->id,
            "description" => "Learn key concepts and strategies in grammar and style to help enhance your writing and confidently respond to the demand of high levels of literacy in the 21st century.",
            "image" => "https://www.edx.org/sites/default/files/course/image/promoted/write101x-378x225_0_0.jpg",
            "length" => "8 weeks",
            "cost" => "0",
            "effort" => "5",
            "level" => "7"
            );

        $course = Course::create($course_data);
        $course->categories()->attach($category->id);


        $category = Category::where("name","Visual arts")->first();


        $course_data = array(
            "name" => "Hollywood: History, Industry, Art",
            "user_id" => $user->id,
            "description" => "In this course you will learn about Hollywood and how it came to be the global powerhouse of today. We will discuss the complex Hollywood industry and how business and politics translate into the art of film, TV, and new media.",
            "image" => "https://www.edx.org/sites/default/files/course/image/promoted/penn_hollywood_378x225.jpg",
            "length" => "4 weeks",
            "cost" => "0",
            "effort" => "5",
            "level" => "7"
            );

        $course = Course::create($course_data);
        $course->categories()->attach($category->id);


        $category = Category::where("name","Archaeology")->first();
        $course_data = array(
            "name" => "Introduction to Human Evolution",
            "user_id" => $user->id,
            "description" => "Explore human evolutionary history through the human fossil, archaeological and genetic records.",
            "image" => "https://www.edx.org/sites/default/files/course/image/promoted/anthro_378x225.jpg",
            "length" => "12 weeks",
            "cost" => "0",
            "effort" => "7",
            "level" => "7"
            );

        $course = Course::create($course_data);
        $course->categories()->attach($category->id);


        $category = Category::where("name","Economics")->first();
        $course_data = array(
            "name" => "Personal Finance Planning",
            "user_id" => $user->id,
            "description" => "Manage your money more effectively by learning practical solutions to key investment, credit, insurance and retirement questions.",
            "image" => "https://www.edx.org/sites/default/files/course/image/promoted/financex-378x225.jpg",
            "length" => "5 weeks",
            "cost" => "0",
            "effort" => "6",
            "level" => "7"
            );

        $course = Course::create($course_data);
        $course->categories()->attach($category->id);


        $course_data = array(
            "name" => "Accountant in Business",
            "user_id" => $user->id,
            "description" => "Understand the role of accountants in ensuring businesses operate effectively, efficiently and ethically with this ACCA-X course.",
            "image" => "https://www.edx.org/sites/default/files/course/image/promoted/fab_1.jpg",
            "length" => "10 weeks",
            "cost" => "0",
            "effort" => "5",
            "level" => "7"
            );

        $course = Course::create($course_data);
        $course->categories()->attach($category->id);


        $category = Category::where("name","Geography")->first();

        $course_data = array(
            "name" => "Cultural Geography of the World",
            "user_id" => $user->id,
            "description" => "This course teaches an approach to spatial patterns and changing process of cultures through geographical perspectives.",
            "image" => "https://www.edx.org/sites/default/files/course/image/promoted/culturalgeo_378x225.jpg",
            "length" => "12 weeks",
            "cost" => "0",
            "effort" => "7",
            "level" => "7"
            );

        $course = Course::create($course_data);
        $course->categories()->attach($category->id);


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
