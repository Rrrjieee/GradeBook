<x-app-layout>
    <x-slot name="header">
    
    </x-slot>

    <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="e7b311ea-95eb-6747-909b-afd49d5467c5">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Courses</a>
          </div>
        

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
       
          <button type="button" class="btn btn-primary color-button" data-toggle="modal" data-target="#exampleModal">
                                Add Course
                                 </button>
            <form method="post" action="{{ route('addCourse') }}" >
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
               
                 
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="text" name="course_name" required class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Course Units</label>
                        <input type="text" name="course_units" required  class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Course Desciption</label>
                        <input type="text" name="course_description" required class="form-control" >
                     </div>
                   
                   
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary color-button"> ADD COURSE</button>
                  </div>
               </div>
            </div>
            </div>

            </form>


            <form method="post" action="{{ route('editCourses') }}" >
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
                  
                  <div class="form-group" >
                        <label for="exampleInputEmail1">Course Name</label>
                        <input type="hidden" name="courses_id" id="courses_id" required class="form-control" >
                        <input type="text" name="course_name" id="course_name" required class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Course Units</label>
                        <input type="text" name="course_units" id="course_units" required  class="form-control" >
                     </div>
                     <div class="form-group" >
                        <label for="exampleInputEmail1">Course Desciption</label>
                        <input type="text" name="course_description" id="course_description" required class="form-control" >
                     </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary color-button"> UPDATE COURSE</button>
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

                                 <div class="card card-nav-tabs" style="padding:20px">
                                 <br>
                             

                                 <table class="table" id="bookings_table">
                                    <thead>
                              
                                       <tr>
                                          <th class="text-center">#</th>
                                          <th>Course Name</th>
                                          <th>Course Unit</th>
                                          <th>Course Desciprtion</th>
                                          <th >Options</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($courses as $row)
                                       <tr>
                                          <td class="text-center">{{ $row->courses_id }}</td>
                                          <td>{{ $row->course_name }}</td>
                                          <td>{{ $row->course_units }}</td>
                                          <td>{{ $row->course_description }}</td>
                                          <td>
                                          <a  onclick="editStudent('{{ $row->courses_id }}', '{{ $row->course_name }}', '{{ $row->course_units }}', '{{ $row->course_description }}')" class="text-white btn btn-primary" >
                                                Edit <i class="material-icons">edit</i></a>
                                             
                                                <a  class="btn btn-danger text-white" data-placement="top"  onclick="return confirm('Are you sure you want to delete this?')" href="{{ route('deleteCourse', $row->courses_id) }}">
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
  function editStudent(courses_id, course_name, course_units, course_description){
    $('#courses_id').val(courses_id);
      $('#course_name').val(course_name);
      $('#course_units').val(course_units);
      $('#course_description').val(course_description);
      $('#exampleModal1').modal('show');
  }
  </script>
    
</x-app-layout>
