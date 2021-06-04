<?php
    use App\Models\GradeModel;

     function getGrade($course_id, $student_id){
       return GradeModel::getGrade($course_id, $student_id);
    }

?>