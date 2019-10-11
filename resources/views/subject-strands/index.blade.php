@extends('layouts.master')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Subject ID</th>
                    <th scope="col">Strand ID</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Grade Level</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($subjectstrands as $subjectstrand)
                    <tr>
                        <td>{{ $subjectstrand->id }}</td>
                        <td>{{ $subjectstrand->subject->name }}</td>
                        <td>{{ $subjectstrand->strand->name }}</td>
                    
                        <td>{{ $subjectstrand->semester }}</td>
                        <td>{{ $subjectstrand->grade_level }}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href='/subject-strands/add'>Add New Subject Strand</a>
    </div>
@endsection