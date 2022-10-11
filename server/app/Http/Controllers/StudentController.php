<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Assignment;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Register;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function getStudents()
    {

        //Get all Students
        return $students = Student::all();

        //If no students, display error
        if ($students->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructors"
            ], 400);
        }
    }

    function getSingleStudent($id)
    {

        //Get Single Student
        return $student = Student::where("id", "=", $id)->get();

        //If no student, display error
        if ($student->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Instructor"
            ], 400);
        }
    }

    function getAssignmentForStudent($id)
    {

        $assignment = Assignment::select("*")
            ->join("students", "assignments.students_id", "=", "id")
            ->where("id", "=", $id)
            ->get();

        if ($assignment->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Assignments"
            ], 400);
        }

        return response()->json($assignment, 201);
    }

    function getAnnouncementsForStudent($id)
    {

        $announcement = Announcement::select("*")
            ->join("students", "announcement.students_id", "=", "id")
            ->where("id", "=", $id)
            ->get();

        if ($announcement->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Announcement"
            ], 400);
        }

        return response()->json($announcement, 201);
    }

    function showCoursesForStudent($id)
    {

        $studentCourse = Register::select("courses_id")
            ->join("students", "registers.students_id", "=", "id")
            ->join("courses", "registers.courses_id", "=", "id")
            ->where("courses_id", "=", $id)
            ->get();

        if ($studentCourse->isEmpty()) {
            return response()->json([
                'status' => "Error",
                'message' => "No Courses"
            ], 400);
        }

        return response()->json($studentCourse, 201);
    }

    function sendAssignments(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'students_id' => 'required',
            'instructors_id' => 'required',
            'subject' => 'required|string|max:50',
            'text' => 'required|string|max:1000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        //Check if instructor exists
        $instructor_id = Instructor::find($request->id);

        if ($instructor_id == null) {
            return response()->json([
                'status' => 'Invalid',
            ], 400);
        }

        //Create Assignment
        Assignment::create($validator->validated());

        //Return a json response
        return response()->json([
            'status' => 'Assignment sent',
        ], 201);
    }
}
