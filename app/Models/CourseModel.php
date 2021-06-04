<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    protected $table = 'courses';
    public $timestamps = false;

    protected $fillable = [
        'course_name',
        'course_units',
        'course_description',
        'is_deleted',
    ];
    public static function getAllCourses(){
        return CourseModel::where('is_deleted', 0)->get();
    }

    public static function addCourse($data){
        return CourseModel::create($data);
    }
    
    public static function updateCourse($id, $data){
        return CourseModel::where('courses_id', $id)->update($data);
    }

    public static function countAllCourses(){
        return CourseModel::where('is_deleted', 0)->count();
    }
}
