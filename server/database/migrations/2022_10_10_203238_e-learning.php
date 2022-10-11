<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('instructors', function ($collection) {
            $collection->id();
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->string('password');
            $collection->string("profile_image")->default("");
            $collection->integer("admins_id")->references('id')->on("admins");
        });

        Schema::create('admins', function ($collection) {
            $collection->id();
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->string('password');
        });

        Schema::create('students', function ($collection) {
            $collection->id();
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->string('password');
            $collection->string("profile_image")->default("");
            $collection->integer("admins_id")->references('id')->on("admins");
        });

        Schema::create('registers', function ($collection) {
            $collection->integer("courses_id")->references('id')->on("courses");
            $collection->integer("students_id")->references('id')->on("students");
        });

        Schema::create('courses', function ($collection) {
            $collection->id();
            $collection->string('course_name');
            $collection->timestamps("course_time");
            $collection->integer("course_credit");
            $collection->integer("admins_id")->references('id')->on("admins");
        });

        Schema::create('teaches', function ($collection) {
            $collection->integer("instructors_id")->references('id')->on("instructors");
            $collection->integer("courses_id")->references('id')->on("courses");
        });

        Schema::create('assignments', function ($collection) {
            $collection->id();
            $collection->string('subject');
            $collection->string('text');
            $collection->integer("students_id")->references('id')->on("students");
            $collection->integer("instructors_id")->references('id')->on("instructors");
        });

        Schema::create('announcements', function ($collection) {
            $collection->id();
            $collection->string('subject');
            $collection->string('text');
            $collection->integer("students_id")->references('id')->on("students");
            $collection->integer("instructors_id")->references('id')->on("instructors");
        });
    }


    public function down()
    {
        Schema::dropIfExists('instructors');
        Schema::dropIfExists('teaches');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('students');
        Schema::dropIfExists('registers');
        Schema::dropIfExists('assignments');
        Schema::dropIfExists('announcements');
    }
};
