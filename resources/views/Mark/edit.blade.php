@extends('layouts.app') 
@section('content') 

    <div class="row"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-left"> 
                <h2>Edit mark</h2> 
            </div> 
            <div class="pull-right"> 
                <a class="btn btn-primary" href="{{ route('marks.index') }}"> View Marks</a> 
            </div> 
        </div> 
    </div> 


    @if ($errors->any()) 
        <div class="alert alert-danger"> 
            <strong>Whoops!</strong> There were some problems with your input.<br><br> 
            <ul> 
                @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> 
                @endforeach 
            </ul> 
        </div> 
    @endif 

    <form action="{{ route('marks.update',$data['mark']['id']) }}" method="post"> 
        @csrf 
        @method('PUT') 
         <div class="row"> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <select name="student_id" class="form-control" disabled="true">
                        <option value ="">Select</option>
                        @foreach($data['students'] as $student) {
                          @if($student['id'] == $data['mark']['student_id'])
                            <option selected="true" value="{{ $student['id'] }}">{{ $student['name'] }}</option>
                          @else
                            <option value="{{ $student['id'] }}">{{ $student['name'] }}</option>
                          @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Maths:</strong>
                    <input type="text" name="maths" class="form-control" placeholder="Maths" value="{{ $data['mark']['maths'] }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Science:</strong>
                    <input type="text" name="science" class="form-control" placeholder="Science" value="{{ $data['mark']['science'] }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>History:</strong>
                    <input type="text" name="history" class="form-control" placeholder="History" value="{{ $data['mark']['history'] }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Term:</strong>
                    <select name="term" class="form-control" disabled="true">
                        <option value ="">Select</option>
                        @foreach($data['terms'] as $term) {
                          @if($term == $data['mark']['term'])
                            <option selected="true" value="{{ $term }}">{{ $term }}</option>
                          @else
                            <option value="{{ $term }}">{{ $term }}</option>
                          @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
              <button type="submit" class="btn btn-primary">Update</button> 
            </div> 

        </div> 

    </form> 

@endsection 