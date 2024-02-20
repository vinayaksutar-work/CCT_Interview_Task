@extends('layouts.main')
@section('main')
<div class="container">
    <div class="row col-sm-12 justify-content-center ">
        <div class="col-sm-6">
            <h2 class="text-center text-uppercase pt-5">Students Data</h2>
            <div class="table-responsive py-3 ">
                <table class="table table-light table-bordered ">
                    <thead>
                        <tr>
                            <th>#Id</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $student->fname}}</td>
                            <td>{{ $student->lname }}</td>
                            <td>{{ $student->subject_id }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-end px-3">
                <a href="{{ route('create') }}" class="btn btn-primary">Add Student</a>
            </div>
        </div>
        <div class="col-sm-6">
            <h2 class="text-center text-uppercase pt-5">Subjects</h2>
            <div class="table-responsive py-3 ">
                <table class="table table-light table-bordered ">
                    <thead>
                        <tr>
                            <th>#Id</th>
                            <th>Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->subject_id }}</td>
                            <td>{{ $subject->subject}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
