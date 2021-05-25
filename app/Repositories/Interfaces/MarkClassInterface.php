<?php 

namespace App\Repositories\Interfaces;

interface MarkClassInterface
{
    public static function index();
    public static function store($request);
    public static function update($request,$student);
    public static function destroy($student);
    public static function getTerms();
}