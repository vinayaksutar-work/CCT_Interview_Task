@extends('layouts.main')
@section('main')
@include('alert')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-sm-8">
            <div class="card my-5 p-3">
                <h2 class="text-center">Add Student</h2>
                <form action="/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">First Name</label>
                        <input type="text" name="fname" class="form-control" value="{{ old('fname') }}"/>
                        @if ($errors->has('fname'))
                            <span class="text-danger">{{ $errors->first('fname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" class="form-control" value="{{ old('lname') }}"/>
                        @if ($errors->has('lname'))
                            <span class="text-danger">{{ $errors->first('lname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Subject</label>
                        <select class="form-control" name="subject_id" value="{{ old('subject_id') }}">
                        <option>--Select Subject--</option>
                            @foreach ($subjects as $sub)
                                <option value="{{ $sub->subject_id }}">{{ $sub->subject }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('subject_id'))
                            <span class="text-danger">{{ $errors->first('subject_id') }}</span>
                        @endif
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('index')}}" class="btn btn-primary">Show Data</a>
                </form>
            </div>
        </div>
    </div>
</div>   
@endsection

