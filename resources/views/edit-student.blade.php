@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student
                        <a href="{{ url('students') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-student/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Age</label>
                            <input type="text" name="age" value="{{$student->age}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Contact</label>
                            <input type="text" name="contact_no" value="{{$student->contact_no}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Subject Name</label>
                            <input type="text" name="subject_name" value="{{$student->subject_name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection