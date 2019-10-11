@extends('layouts.master')
@section('content')
    <div class="container">
        @include('layouts.errors')
        <form method="POST" action="/sections/store">
            @csrf
          <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Name">
          </div>
           <div class="form-group">
            <label for="title">Subject Strand</label>
            <input type="text" class="form-control" name='subject_stand_id' aria-describedby="emailHelp" placeholder="Subject Strand">
        </div>
        <div class="form-group">
            <label for="title">Section</label>
            <input type="text" class="form-control" name='section_id' aria-describedby="emailHelp" placeholder="Section">
        </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection