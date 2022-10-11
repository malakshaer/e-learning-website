<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LandingController;

Route::group(["prefix" => "auth"], function () {

    Route::group(["middleware" => "auth:api"], function () {

        //AuthController
        Route::get("/logout", [AuthController::class, "logout"]);
        Route::get("/refresh", [AuthController::class, "refresh"]);

        //LandingController
        Route::get("/getInstructors", [LandingController::class, "getInstructors"]);
        Route::get("/getSingleInstructor/{id}", [LandingController::class, "getSingleInstructor"]);
        Route::get("/getCourses", [LandingController::class, "getCourses"]);
        Route::get("/getSingleCourse/{id}", [LandingController::class, "getSingleCourse"]);
        Route::get("/getAssignments", [LandingController::class, "getAssignments"]);
        Route::get("/getAnnouncements", [LandingController::class, "getAnnouncements"]);
        Route::get("/getSingleAssignment/{id}", [LandingController::class, "getSingleAssignment"]);
        Route::get("/getSingleAnnouncement/{id}", [LandingController::class, "getSingleAnnouncement"]);

        Route::post("/addCourse", [LandingController::class, "addCourse"]);
        Route::post("/addStudent", [LandingController::class, "addStudent"]);
        Route::post("/addInstructor", [LandingController::class, "addInstructor"]);
        Route::post("/createAssignments", [LandingController::class, "createAssignments"]);
        Route::post("/assignCourse", [LandingController::class, "assignCourseToInstructor"]);
        Route::post("/createAnnouncements", [LandingController::class, "createAnnouncements"]);

        //StudentController
        Route::get("/getStudents", [StudentController::class, "getStudents"]);
        Route::get("/getSingleStudent/{id}", [StudentController::class, "getSingleStudent"]);
        Route::get("/showCoursesForStudent/{id}", [StudentController::class, "showCoursesForStudent"]);
        Route::get("/getAssignmentForStudent/{id}", [StudentController::class, "getAssignmentForStudent"]);
        Route::get("/getAnnouncementsForStudent/{id}", [StudentController::class, "getAnnouncementsForStudent"]);

        Route::post("/sendAssignments", [StudentController::class, "sendAssignments"]);
    });


    Route::post("/login", [AuthController::class, "login"]);
    Route::post("/register", [AuthController::class, "register"]);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
