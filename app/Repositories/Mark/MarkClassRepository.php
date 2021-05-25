<?php

namespace App\Repositories\Mark;
use App\Repositories\Interfaces\MarkClassInterface;
use App\Models\Mark;
use App\Models\Student;

class MarkClassRepository implements MarkClassInterface
{
    public static function index()
    { 
    	return Student::join('marks','students.id','=','marks.student_id')->get();
    }

    public static function store($request)
    { 
        if(Mark::where('student_id','=',$request->student_id)->where('term','=',$request->term)->first()){
            return "Details are already exist for slected term";
        } else{
            Mark::create($request->all());
            return "Mark details added.";
        }
    	
    }

    public static function update($request,$mark)
    { 
    	$mark->update($request->all());
    }

    public static function destroy($mark)
    { 
    	$mark->delete();
    }

    public static function getTerms()
    {
        return array("One","Two","Three");
    }
}
