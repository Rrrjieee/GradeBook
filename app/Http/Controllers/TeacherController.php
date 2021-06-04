<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\StudentModel;
use App\Models\CourseModel;
use App\Models\GradeModel;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function dashboard(){
        $data['countAllStudents'] = StudentModel::countAllStudents();
        $data['countAllCourses'] = CourseModel::countAllCourses();
        $data['countAllReports'] = GradeModel::countAllReports();

        $data['students'] = StudentModel::getAllStudents();
        return view('dashboard' , $data);
    }
    public function grading(){
        
        $data['students'] = StudentModel::getAllStudents();
        $data['courses'] = CourseModel::getAllCourses();
        return view('grading' , $data);
    }

    public function reports(){
        $data['students'] = StudentModel::getAllStudents();
        $data['courses'] = CourseModel::getAllCourses();
        return view('reports' , $data);
    }
    public function addGrade(Request $request){

        $course = $request->course; 
        $student_id =  $request->student_id; 
        foreach($course as $key => $value){
         
            $data = array(
                'course_id' => $key,
                'grade'  => $value,
                'student_id' => $student_id
            );
            
            $result = GradeModel::addGrade($data);
        }
        if($result){
            return redirect()->back()->with('message', 'Added Successfully');
        }

    }
    public function courses(){

        $data['courses'] = CourseModel::getAllCourses();
        return view('courses' , $data);
    }

    public function addCourse(Request $request){
        $validatedata = $request->validate([
            'course_name'  =>  'required',
            'course_units'         =>  'required',
            'course_description'             =>  'required',
        ]);
        
        $data = array(
        'course_name' =>  $request->course_name,
        'course_units'  => $request->course_units,
        'course_description'  => $request->course_description
        );
        $result = CourseModel::addCourse($data);

        if($result){
            return redirect()->back()->with('message', 'Added Successfully');
        }
    }

    public function deleteCourse($id){
        $data = array(
            'is_deleted' => 1
        );
        $result = CourseModel::updateCourse($id, $data);
        
        if($result){
            return redirect()->back()->with('message', 'Deleted Successfully');
        }
    }
    public function addStudent(Request $request){
        $validatedata = $request->validate([
            'student_id_number'  =>  'required',
            'last_name'         =>  'required',
            'first_name'             =>  'required',
            'middle_name'      =>  'required',
            'student_age'          =>  'required',
            'grade_level'             =>  'required',
            'room_number'               =>  'required',
            'email'               =>  'email',
        ]);
        
        $user = User::create([
            'name' => $request->first_name .' '. $request->middle_name . ' ' . $request->last_name,
            'email' => $request->email,
            'type'  => 'student',
            'password' => Hash::make($request->student_id_number),
        ]);


        $data = array(
        'student_id_number' =>  $request->student_id_number,
        'user_id' => $user->id,
        'first_name'  => $request->first_name,
        'last_name'  => $request->last_name,
        'middle_name'   =>$request->middle_name,
        'grade_level'  => $request->grade_level,
        'room_number'  => $request->room_number,
        'student_age'  => $request->student_age,
        'password'  => Hash::make($request->student_id_number),
        'date_created'  => date('Y-m-d H:i:s'),
        );
        $result = StudentModel::addStudent($data);


      
        if($result){
            return redirect()->back()->with('message', 'Added Successfully');
        }
    }

    public function deleteStudent($id){
        $data = array(
            'is_deleted' => 1
        );
        $result = StudentModel::updateStudent($id, $data);
        
        if($result){
            return redirect()->back()->with('message', 'Deleted Successfully');
        }
    }

    public function editStudent(Request $request){
        $data = array(
            'student_id_number' =>  $request->student_id_number,
            'first_name'  => $request->first_name,
            'last_name'  => $request->last_name,
            'middle_name'   =>$request->middle_name,
            'grade_level'  => $request->grade_level,
            'room_number'  => $request->room_number,
            'student_age'  => $request->student_age,
            );
            $result = StudentModel::updateStudent($request->student_id, $data);

             
        if($result){
            return redirect()->back()->with('message', 'Updated Successfully');
        }
    }

    public function editCourses(Request $request){
        $validatedata = $request->validate([
            'course_name'  =>  'required',
            'course_units'         =>  'required',
            'course_description'             =>  'required',
        ]);
        
        $data = array(
        'course_name' =>  $request->course_name,
        'course_units'  => $request->course_units,
        'course_description'  => $request->course_description
        );
            $result = CourseModel::updateCourse($request->courses_id, $data);

             
        if($result){
            return redirect()->back()->with('message', 'Updated Successfully');
        }
    }

}
