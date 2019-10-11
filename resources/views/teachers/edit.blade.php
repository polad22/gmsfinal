@extends('layouts.master')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <form method="POST" action="/teachers/{{ $teacher->id }}/update">
            @csrf
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Name">
            <label for="sel1">Advisory Section</label>
            <select class="form-control" id="sel1" name='advisory_section'>
              @foreach ($sections as $section)
              <option value= '{{ $section->name }}'>{{ $section->name }}</option>
              @endforeach
            </select>
         <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection