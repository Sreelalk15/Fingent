<?php 

namespace App\Repositories\Interfaces;

interface StudentClassInterface
{
    public static function index();
    public static function getTeachers();
    public static function store($request);
    public static function update($request,$student);
    public static function destroy($student);
    public static function getStudents();
}