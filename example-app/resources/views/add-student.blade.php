@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Student</h4><a href="{{ url('students') }}" class="btn btn-danger float-end">BACK</a>
                    
                </div>
                <div class="card-body">

                    <form action="{{ url('add-student') }}" method="POST">

                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Contact</label>
                            <input type="text" name="contact_no" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Subject</label>
                            <input type="text" name="subject_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection