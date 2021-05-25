@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Mark</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('marks.index') }}">View Marks</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 
    <form action="{{ route('marks.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <select name="student_id" class="form-control">
                        <option value ="">Select</option>
                        @foreach($data['students'] as $student)
                            <option {{ old('student_id') == $student['id'] ? 'selected' : '' }} value="{{ $student['id']}}">{{ $student['name']}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maths:</strong>
                    <input type="text" name="maths" class="form-control" placeholder="Maths" value="{{old('maths')}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Science:</strong>
                    <input type="text" name="science" class="form-control" placeholder="Science" value="{{old('science')}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>History:</strong>
                    <input type="text" name="history" class="form-control" placeholder="History" value="{{old('history')}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Term:</strong>
                    <select name="term" class="form-control">
                        <option value ="">Select</option>
                        @foreach($data['terms'] as $term)
                            <option {{ old('term') == $term ? 'selected' : '' }} value="{{ $term}}">{{ $term}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection