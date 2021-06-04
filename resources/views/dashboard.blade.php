<x-app-layout>
    <x-slot name="header">
    
    </x-slot>

    <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="e7b311ea-95eb-6747-909b-afd49d5467c5">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
        

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Courses</p>
                  <h3 class="card-title">{{ $countAllCourses }}               
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Students</p>
                  <h3 class="card-title">{{ $countAllStudents }}  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Reports</p>
                  <h3 class="card-title">{{ $countAllReports }}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Feedbacks</p>
                  <h3 class="card-title">1</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                  
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <button type="button" class="btn btn-primary color-button" data-toggle="modal" data-target="#exampleModal">
                                Add Student
                                 </button>
            <form method="post" action="{{ route('addStudent') }}" >
            @csrf
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="form-group">
                        <label for="exampleInputPassword1">Student ID</label>
                        <input type="text" name="student_id_number" required   class="form-control">
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" required class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" required class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name" required  class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="text" name="middle_name" required class="form-control" >
                     </div>
                     
                     <div class="form-group">
                        <label for="exampleInputPassword1">Student Age</label>
                        <input name="student_age" type="number" required class="form-control" >
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Grade Level</label>
                        <input name="grade_level" type="text" required class="form-control" >
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Room Number</label>
                        <input name="room_number" type="text" required class="form-control" >
                     </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary color-button"> ADD STUDENT</button>
                  </div>
               </div>
            </div>
            </div>

            </form>


            <form method="post" action="{{ route('editStudent') }}" >
            @csrf
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                  
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  <div class="modal-body">
                  <div class="form-group">
                        <label for="exampleInputPassword1">Student ID</label>
                        <input type="hidden" name="student_id"  id="student_id"  class="form-control">
                        <input type="text" name="student_id_number" id="student_id_number"  required   class="form-control">
                     </div>
                 
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Last Name</label>
                        <input type="text" name="last_name" id="last_name" required class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">First Name</label>
                        <input type="text" name="first_name"  id="first_name" required  class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Middle Name</label>
                        <input type="text" name="middle_name" id="middle_name"  required class="form-control" >
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Student Age</label>
                        <input name="student_age" type="number" id="student_age" required class="form-control" >
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Grade Level</label>
                        <input name="grade_level" id="grade_level"  type="text" required class="form-control" >
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Room Number</label>
                        <input name="room_number" id="room_number" type="text" required class="form-control" >
                     </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary color-button"> UPDATE STUDENT</button>
                  </div>
               </div>
            </div>
            </div>

            </form>
            @if(session()->has('message'))
                                      <p  class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session()->get('message') }}</p>
                                      @endif
                                  @if(session()->has('errormessage'))
                                      <p  class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ session()->get('errormessage') }}</p>
                                  @endif


                                 <h3 style="text-align: center; margin-top: 20px;">Students</h3>
                                 <div class="card card-nav-tabs" style="padding:20px">
                                 <br>
                             

                                 <table class="table" id="bookings_table">
                                    <thead>
                              
                                       <tr>
                                          <th class="text-center">Student #</th>
                                          <th>Student Name</th>
                                          <th>Student Age</th>
                                          <th>Grade Level</th>
                                          <th>Room Number</th>
                                          <th >Options</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($students as $row)
                                       <tr>
                                          <td class="text-center">{{ $row->student_id_number }}</td>
                                          <td>{{ $row->first_name }} {{ $row->middle_name }} {{ $row->last_name }}</td>
                                          <td>{{ $row->student_age }}</td>
                                          <td>{{ $row->grade_level }}</td>
                                          <td>{{ $row->room_number }}</td>
                                          <td>
                                          <a  onclick="editStudent('{{ $row->student_id }}', '{{ $row->student_id_number }}', '{{ $row->first_name }}', '{{ $row->middle_name }}', '{{ $row->last_name }}', '{{ $row->student_age }}', '{{ $row->grade_level }}', '{{ $row->room_number }}')" class="text-white btn btn-primary" >
                                                Edit <i class="material-icons">edit</i></a>
                                             
                                                <a  class="btn btn-danger text-white" data-placement="top"  onclick="return confirm('Are you sure you want to delete this?')" href="{{ route('deleteStudent', $row->student_id) }}">
                                             Delete <i class="material-icons">delete</i></a>
                                           
                                          </td>
                                       </tr>
                                 @endforeach

                                    </tbody>
                                 </table>
                            </div>
        </div>
      </div>
  <script>
  function editStudent(student_id, student_id_number, first_name, middle_name, last_name, student_age, grade_level, room_number){
      $('#student_id').val(student_id);
      $('#student_id_number').val(student_id_number);
      $('#first_name').val(first_name);
      $('#middle_name').val(middle_name);
      $('#last_name').val(last_name);
      $('#student_age').val(student_age);
      $('#grade_level').val(grade_level);
      $('#room_number').val(room_number);
      $('#exampleModal1').modal('show');
  }
  </script>
    
</x-app-layout>
