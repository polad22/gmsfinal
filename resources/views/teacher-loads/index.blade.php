@extends('layouts.master')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Section</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($teacherloads as $teacherload)
                    <tr>
                        <td>{{ $teacherload->id }}</td>
                        <td>{{ $teacherload->subject_id }}</td>
                        <td>{{ $teacherload->section_id }}</td> 
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="/teacher-loads/store">
            @csrf
                <div class="modal-header text-center" >
                <h4 class="modal-title w-100 font-weight-bold">Add a Teacher Load</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>

            <div class="modal-body mx-3">
                <div class="form-group">
                  <div class="md-form mb-5">
                    <label for="sel1">Subject</label>
                    <select class="form-control" id="sel1" name='subject_id'>
                      @foreach ($subjects as $subject)
                      <option value= '{{ $subject->name }}'>{{ $subject->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <div class="md-form mb-5">
                    <label for="sel1">Section</label>
                    <select class="form-control" id="sel1" name='section_id'>
                      @foreach ($sections as $section)
                      <option value= '{{ $section->name }}'>{{ $section->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                
            </div>
            <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-deep-orange">Submit</button>
          </div>
          </form>
        </div>
        </div>
      </div>
    </div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Add New Teacher Load</a>
</div>
@endsection