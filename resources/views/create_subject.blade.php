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
                        <label for="">Subject Id</label>
                        <input type="text" name="subject_id" class="form-control" value="{{ old('subject_id') }}"/>
                        @if ($errors->has('subject_id'))
                            <span class="text-danger">{{ $errors->first('subject_id') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Subject</label>
                        <input type="text" name="subject" class="form-control" value="{{ old('subject') }}"/>
                        @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        @endif
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>   
@endsection

