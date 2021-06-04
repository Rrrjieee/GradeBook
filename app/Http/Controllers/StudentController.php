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
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;


class StudentController extends BaseController
{
    public function dashboard(){
       
  

        $data['students'] = StudentModel::getAllStudentGrades(auth()->id());
        return view('student_dashboard' , $data);
    }


}
