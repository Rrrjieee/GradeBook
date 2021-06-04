<x-app-layout>
    <x-slot name="header">
    
    </x-slot>

    <div class="main-panel ps-container ps-theme-default ps-active-y" data-ps-id="e7b311ea-95eb-6747-909b-afd49d5467c5">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Reports</a>
          </div>
        

        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
       
        
           


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
                                          <th class="text-center" width="10%">Student ID</th>
                                          <th width="15%">Student Name</th>
                                          @foreach($courses as $row)
                                          <th>{{ $row->course_name }}</th>
                                          @endforeach
                                       </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($students as $rowStudent)
                                    
                                       <tr>
                                      
                                       @csrf
                                         
                                      
                                          <td class="text-center" width="10%">{{ $rowStudent->student_id_number }}</td>
                                          <td width="15%">{{ $rowStudent->first_name }} {{ $rowStudent->middle_name }} {{ $rowStudent->last_name }}</td>
                                          @foreach($courses as $row)
                                          @php
                                          $result = getGrade($row->courses_id, $rowStudent->student_id);
                                          @endphp
                                          <td width="10%">{{ $result->grade }}</td>
                                          @endforeach
                                        
                                        
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
