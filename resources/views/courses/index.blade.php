@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Courses</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th><th>Student</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{ $course->title }}</td>
                <td>{{ $course->student->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
