<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Assignment;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Teach;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    function addStudent(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        //If the validator failed, display an error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Add Student
        Student::create($validator->validated());

        //Return Response
        return response()->json([
            'status' => 'Student Added Successfully',
        ], 201);
    }

    function addCourse(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'course_name' => 'required',
            'course_time' => 'required',
            'course_credit' => 'required',
        ]);

        //If the validator failed, display an error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Add Course
        Course::create($validator->validated());

        //Return Response
        return response()->json([
            'status' => 'Courses Added Successfully',
        ], 201);
    }

    function addInstructor(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required',
        ]);

        //If the validator failed, display an error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Add Instructor
        Instructor::create($validator->validated());

        //Return Response
        return response()->json([
            'status' => 'Instructor Added Successfully',
        ], 201);
    }

    function assignCourseToInstructor(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'instructors_id' => 'required',
            'courses_id' => 'required',
        ]);

        //Check if Instructor exist
        $course_id = Course::find($request->id);
        $instructor_id = Instructor::find($request->id);

        //If instructor or course does not exist, display error
        if ($course_id == null || $instructor_id == null) {
            return response()->json([
                'status' => 'Invalid Input',
            ], 400);
        }

        //Add to Teaches
        Teach::create($validator->validated());

        //Return a success response
        return response()->json([
            'status' => 'Added Successfully',
        ], 201);
    }

    function createAssignments(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'text' => 'required',
        ]);

        //Add Assignment
        Assignment::create($validator->validated());

        //Return a success response
        return response()->json([
            'status' => 'Created Successfully',
        ], 201);
    }

    function createAnnouncements(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'text' => 'required',
        ]);

        //Add Announcements
        Announcement::create($validator->validated());

        //Return a success response
        return response()->json([
            'status' => 'Created Successfully',
        ], 201);
    }

    function getInstructors()
    {

        //Get all Instructors
        return $Instructors = Instructor::all();

        //If no instructors, display error
        if ($Instructors->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructors"
            ], 400);
        }
    }

    function getSingleInstructor($id)
    {

        //Get Instructor
        return $Instructor = Instructor::where("id", "=", $id)->get();

        //If no instructors, display error
        if ($Instructor->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructor"
            ], 400);
        }
    }

    function getAssignments($id)
    {

        //Get Assignments
        return Assignment::where("id", $id)->get();

        //If no instructors, display error
        if ($id->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructor"
            ], 400);
        }
    }
}
