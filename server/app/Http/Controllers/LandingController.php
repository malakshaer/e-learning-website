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
            'subject' => 'required|string',
            'text' => 'required|string',
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
            'subject' => 'required|string',
            'text' => 'required|string',
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
        return $instructors = Instructor::all();

        //If no instructors, display error
        if ($instructors->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructors"
            ], 400);
        }
    }

    function getSingleInstructor($id)
    {

        //Get Single Instructor
        return $instructor = Instructor::where("id", "=", $id)->get();

        //If no instructor, display error
        if ($instructor->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructor"
            ], 400);
        }
    }

    function getCourses()
    {

        //Get all Courses
        return $courses = Course::all();

        //If no courses, display error
        if ($courses->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructors"
            ], 400);
        }
    }

    function getSingleCourse($id)
    {

        //Get Single Course
        return $course = Course::where("id", "=", $id)->get();

        //If no course, display error
        if ($course->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructor"
            ], 400);
        }
    }

    function getAssignments()
    {
        //Get Assignments
        $assignments =  Assignment::all()->orderBy('id', 'Desc')->get();

        //send back response
        return response()->json($assignments);
    }

    function getSingleAssignment($id)
    {
        //Get Single Assignment
        $assignment =  Assignment::where('id', $id)->get();

        //send back response
        return response()->json($assignment);
    }

    function getAnnouncements()
    {
        //Get Announcements
        $announcements =  Announcement::all()->orderBy('id', 'Desc')->get();

        //send back response
        return response()->json($announcements);
    }

    function getSingleAnnouncement($id)
    {
        //Get Single Announcement
        $announcement =  Announcement::where('id', $id)->get();

        //send back response
        return response()->json($announcement);
    }

    function removeAnnouncement(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'subject' => 'required|string',
            'text' => 'required|string',
        ]);

        //If the validation failed, display an error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Delete record from the table
        $announcement = Announcement::where([
            ['id', '=', $request->id],
            ['subject', '=', $request->subject],
            ['text', '=', $request->text],
        ])->delete();

        //If no record was returned back, display an error
        if ($announcement == 0) {
            return response()->json([
                'status' => 'Not Announcement',
            ], 201);
        }

        //send back response
        return response()->json([
            'status' => 'Deleted',
        ], 201);
    }

    function removeAssignment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required|integer',
            'subject' => 'required|string',
            'text' => 'required|string',
        ]);

        //If the validation failed, display an error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //Delete record from the table
        $assignment = Assignment::where([
            ['id', '=', $request->id],
            ['subject', '=', $request->subject],
            ['text', '=', $request->text],
        ])->delete();

        //If no record was returned back, display an error
        if ($assignment == 0) {
            return response()->json([
                'status' => 'No assignment',
            ], 201);
        }

        //send back response
        return response()->json([
            'status' => 'Deleted',
        ], 201);
    }
}
