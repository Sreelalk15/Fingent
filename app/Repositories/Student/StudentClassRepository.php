<?php

namespace App\Repositories\Student;
use App\Repositories\Interfaces\StudentClassInterface;
use App\Models\Student;
use App\Models\Mark;

class StudentClassRepository implements StudentClassInterface
{
    public static function index()
    {
    	return Student::get();
    }

    public static function getTeachers()
    {
    	return array("Teacher1","Teacher2","Teacher3","Teacher4");
    }

    public static function store($request)
    { 
    	Student::create($request->all());
    }

    public static function update($request,$student)
    {
    	$student->update($request->all());
    }

    public static function destroy($student)
    {
    	if($student->delete()){
            Mark::where('student_id','=',$student->id)->delete();
        }
    }

    public static function getStudents()
    {
        return Student::get();
    }
}
