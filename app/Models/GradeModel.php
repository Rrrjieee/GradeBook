<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GradeModel extends Model
{
    protected $table = 'grade';
    public $timestamps = false;

    protected $fillable = [
        'course_id',
        'student_id',
        'grade',
    ];

    public static function addGrade($data){
        return GradeModel::create($data);
    }

    public static function getGrade($course_id, $student_id){
        return GradeModel::where('course_id',  $course_id)->where('student_id', $student_id)->first();
    }

    public static function countAllReports(){
        return GradeModel::count();
    }
  
  
}
