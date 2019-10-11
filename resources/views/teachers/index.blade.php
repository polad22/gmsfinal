@extends('layouts.master')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Advisory Section</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->advisory_section }}</td>
                        <td><a href="/teachers/{{ $teacher->id }}/edit">Edit</a></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href='/teachers/add'>Add a Teacher</a>
    </div>
@endsection