<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table = 'students';
    public $timestamps = false;

    protected $fillable = [
        'student_id_number',
        'first_name',
        'last_name',
        'middle_name',
        'grade_level',
        'room_number',
        'student_age',
        'date_created',
        'password',
        'is_deleted',
        'user_id',
    ];



    public static function getAllStudents(){
        return StudentModel::where('is_deleted', 0)->get();
    }

    public static function addStudent($data){
        return StudentModel::create($data);
    }
    
    public static function updateStudent($id, $data){
        return StudentModel::where('student_id', $id)->update($data);
    }
    public static function countAllStudents(){
        return StudentModel::where('is_deleted', 0)->count();
    }
    public static function getAllStudentGrades($id){
        return StudentModel::join('grade', 'grade.student_id' , '=', 'students.student_id')->join('courses', 'courses.courses_id' , '=', 'grade.course_id')->where('user_id', $id)->get();
    }
}
