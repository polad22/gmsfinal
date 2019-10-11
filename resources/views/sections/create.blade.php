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
            <label for="title">Active</label>
            <input type="text" class="form-control" name='is_active' aria-describedby="emailHelp" placeholder="Active">
        </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection