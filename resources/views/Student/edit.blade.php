@extends('layouts.app') 
@section('content') 

    <div class="row"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="pull-left"> 
                <h2>Edit student</h2> 
            </div> 
            <div class="pull-right"> 
                <a class="btn btn-primary" href="{{ route('students.index') }}"> View List</a> 
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

    <form action="{{ route('students.update',$data['student']['id']) }}" method="post"> 
        @csrf 
        @method('PUT') 
         <div class="row"> 
            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <div class="form-group"> 
                    <strong>Name:</strong> 
                    <input type="text" name="name" value="{{ $data['student']['name'] }}" class="form-control" placeholder="Name"> 
                </div> 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <div class="form-group"> 
                    <strong>Age:</strong> 
                    <input type="text" name="age" value="{{ $data['student']['age'] }}" class="form-control" placeholder="Age"> 
                </div> 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <div class="form-group"> 
                    <strong>Gender:</strong> 
                    <input type="text" name="gender" value="{{ $data['student']['gender'] }}" class="form-control" placeholder="Gender"> 
                </div> 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12"> 
                <div class="form-group"> 
                    <strong>Teacher:</strong> 
                    <select name="reporting_teacher" class="form-control" placeholder="Reporting teacher">
                        <option value ="">Select</option>
                        @foreach($data['teachers'] as $teacher)
                          @if($teacher == $data['student']['reporting_teacher'])
                            <option selected="true" value="{{ $teacher}}">{{ $teacher}}</option>
                          @else
                            <option value="{{ $teacher}}">{{ $teacher}}</option>
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