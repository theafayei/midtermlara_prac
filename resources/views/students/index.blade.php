{{-- resources/views/students/index.blade.php --}}
@extends('app')

@section('content')
    <h1 class="mb-3">Students</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Courses</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>
                    @foreach($student->courses as $course)
                        <span class="badge bg-primary">{{ $course->title }}</span>
                    @endforeach
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
