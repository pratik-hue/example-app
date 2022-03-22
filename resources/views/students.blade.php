@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Student info</h4>
                </div>
                <div class="card-body">
                
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Contact.No</th>
                                <th>Subject</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th><a href="{{url('add-student')}}">Create</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->age }}</td>
                                <td>{{ $item->contact_no}}</td>
                                <td>{{ $item->subject_name}}</td>
                                <td>
                                    <a href="{{url('edit-student/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                   
                                    <a href="{{url('delete/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection