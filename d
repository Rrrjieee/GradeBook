[33mcommit 7c6c223ce9e8695c86d8f17bbadd20ec0817bb5c[m[33m ([m[1;36mHEAD -> [m[1;32mmaster[m[33m, [m[1;31morigin/master[m[33m, [m[1;31morigin/HEAD[m[33m)[m
Author: jaydesiert <jaydesierto@gmail.com>
Date:   Fri Jun 4 20:38:23 2021 +0800

    fixes

[1mdiff --git a/app/Http/Controllers/TeacherController.php b/app/Http/Controllers/TeacherController.php[m
[1mindex 3d55fe3c..29d73620 100644[m
[1m--- a/app/Http/Controllers/TeacherController.php[m
[1m+++ b/app/Http/Controllers/TeacherController.php[m
[36m@@ -107,8 +107,17 @@[m [mclass TeacherController extends BaseController[m
             'email'               =>  'email',[m
         ]);[m
         [m
[32m+[m[32m        $user = User::create([[m
[32m+[m[32m            'name' => $request->first_name .' '. $request->middle_name . ' ' . $request->last_name,[m
[32m+[m[32m            'email' => $request->email,[m
[32m+[m[32m            'type'  => 'student',[m
[32m+[m[32m            'password' => Hash::make($request->student_id_number),[m
[32m+[m[32m        ]);[m
[32m+[m
[32m+[m
         $data = array([m
         'student_id_number' =>  $request->student_id_number,[m
[32m+[m[32m        'user_id' => $user->id,[m
         'first_name'  => $request->first_name,[m
         'last_name'  => $request->last_name,[m
         'middle_name'   =>$request->middle_name,[m
[36m@@ -121,13 +130,7 @@[m [mclass TeacherController extends BaseController[m
         $result = StudentModel::addStudent($data);[m
 [m
 [m
[31m-        User::create([[m
[31m-            'name' => $request->first_name .' '. $request->middle_name . ' ' . $request->last_name,[m
[31m-            'email' => $request->email,[m
[31m-            'type'  => 'student',[m
[31m-            'password' => Hash::make($request->student_id_number),[m
[31m-        ]);[m
[31m-[m
[32m+[m[41m      [m
         if($result){[m
             return redirect()->back()->with('message', 'Added Successfully');[m
         }[m
[1mdiff --git a/app/Models/StudentModel.php b/app/Models/StudentModel.php[m
[1mindex f41eeb75..484c695f 100644[m
[1m--- a/app/Models/StudentModel.php[m
[1m+++ b/app/Models/StudentModel.php[m
[36m@@ -20,6 +20,7 @@[m [mclass StudentModel extends Model[m
         'date_created',[m
         'password',[m
         'is_deleted',[m
[32m+[m[32m        'user_id',[m
     ];[m
 [m
 [m
[1mdiff --git a/resources/views/student_dashboard.blade.php b/resources/views/student_dashboard.blade.php[m
[1mindex 55624fe2..d8770b61 100644[m
[1m--- a/resources/views/student_dashboard.blade.php[m
[1m+++ b/resources/views/student_dashboard.blade.php[m
[36m@@ -33,6 +33,7 @@[m
                                     <thead>[m
                               [m
                                        <tr>[m
[32m+[m[32m                                       <th class="text-center">#</th>[m
                                           <th class="text-center">Course Name</th>[m
                                           <th>Course Units</th>[m
                                           <th>Course Desciption</th>[m
[36m@@ -40,14 +41,21 @@[m
                                        </tr>[m
                                     </thead>[m
                                     <tbody>[m
[32m+[m[32m                                    @php[m[41m [m
[32m+[m[32m                                       $i = 1;[m
[32m+[m[32m                                    @endphp[m
                                   @foreach($students as $row)[m
                                        <tr>[m
[32m+[m[32m                                       <td class="text-center">{{ $i }}</td>[m
                                           <td class="text-center">{{ $row->course_name }}</td>[m
                                           <td>{{ $row->course_units }}</td>[m
                                           <td>{{ $row->course_description }}</td>[m
                                           <td>{{ $row->grade }}</td>[m
                                          [m
                                        </tr>[m
[32m+[m[32m                                       @php[m[41m [m
[32m+[m[32m                                       $i++;[m
[32m+[m[32m                                    @endphp[m
                                  @endforeach[m
 [m
                                     </tbody>[m
