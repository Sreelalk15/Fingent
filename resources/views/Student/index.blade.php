@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Student List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}">Create</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Reporting Teacher</th>
            <th>Actions</th>
        </tr>
         @foreach($data['students'] as $student) 

            <tr> 
                <td>{{ $student['id'] }}</td> 
                <td>{{ $student['name'] }}</td> 
                <td>{{ $student['age'] }}</td>
                <td>{{ $student['gender'] }}</td>
                <td>{{ $student['reporting_teacher'] }}</td>   
                <td> 
                    <form action="{{ route('students.destroy',$student['id']) }}" method="POST">
                        @csrf     
                        <a href="{{ route('students.edit',$student['id']) }}">Edit</a>&nbsp;&nbsp;/&nbsp;&nbsp;    
                        @method('DELETE')       
                        <button type="submit">Delete</button> 
                    </form> 
                </td> 
            </tr> 
         @endforeach 
    </table>

@endsection