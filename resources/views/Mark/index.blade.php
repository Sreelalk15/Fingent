@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Mark List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('marks.create') }}">Create</a>
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
            <th>Maths</th>
            <th>Science</th>
            <th>History</th>
            <th>Term</th>
            <th>Total Marks</th>
            <th>Created On</th>
            <th>Actions</th>
        </tr>
         @foreach($data['marks'] as $mark) 

            <tr> 
                <td>{{ $mark['id'] }}</td> 
                <td>{{ $mark['name'] }}</td> 
                <td>{{ $mark['maths'] }}</td>
                <td>{{ $mark['science'] }}</td>
                <td>{{ $mark['history'] }}</td>
                <td>{{ $mark['term'] }}</td>  
                <td>{{ $mark['maths'] + $mark['science'] + $mark['history'] }}</td>
                <td>
                    {{ date('F d, Y', strtotime($mark['created_at'])) }}<br>
                    {{ date('h:i A', strtotime($mark['created_at'])) }}
                </td>
                <td> 
                    <form action="{{ route('marks.destroy',$mark['id']) }}" method="POST">
                        @csrf     
                        <a href="{{ route('marks.edit',$mark['id']) }}">Edit</a>&nbsp;&nbsp;/&nbsp;&nbsp;    
                        @method('DELETE')       
                        <button type="submit">Delete</button> 
                    </form> 
                </td> 
            </tr> 
         @endforeach 
    </table>

@endsection