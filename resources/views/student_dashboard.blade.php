@extends('layouts.student_header')
@section('content')

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
                                       <th class="text-center">#</th>
                                          <th class="text-center">Course Name</th>
                                          <th>Course Units</th>
                                          <th>Course Desciption</th>
                                          <th>Grade</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    @php 
                                       $i = 1;
                                    @endphp
                                  @foreach($students as $row)
                                       <tr>
                                       <td class="text-center">{{ $i }}</td>
                                          <td class="text-center">{{ $row->course_name }}</td>
                                          <td>{{ $row->course_units }}</td>
                                          <td>{{ $row->course_description }}</td>
                                          <td>{{ $row->grade }}</td>
                                         
                                       </tr>
                                       @php 
                                       $i++;
                                    @endphp
                                 @endforeach

                                    </tbody>
                                 </table>
                            </div>
        </div>
      </div>


      @endsection