<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use Illuminate\Http\Request;
use App\Http\Requests\MarkRequest;
use App\Http\Requests\MarkUpdateRequest;
use App\Repositories\Interfaces\MarkClassInterface;
use App\Repositories\Interfaces\StudentClassInterface;

class markController extends Controller
{
    public function __construct(MarkClassInterface $mark_class_interface,StudentClassInterface $student_class_interface)
    {
        $this->mark_class_interface = $mark_class_interface;
        $this->student_class_interface = $student_class_interface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $data['marks']  = $this->mark_class_interface->index();
        return view('mark.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['students'] = $this->student_class_interface->getStudents();
        $data['terms'] = $this->mark_class_interface->getTerms();
        return view('mark.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarkRequest $request)
    { 
       $response = $this->mark_class_interface->store($request);
       
       return redirect()->route('marks.index')
            ->with('success', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show(Mark $mark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        $data['mark'] = $mark;
        $data['students'] = $this->student_class_interface->getStudents();
        $data['terms'] = $this->mark_class_interface->getTerms();
        return view('mark.edit',compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(MarkUpdateRequest $request, Mark $mark)
    { 
        $this->mark_class_interface->update($request,$mark);

        return redirect()->route('marks.index')
            ->with('success', 'mark details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        $this->mark_class_interface->destroy($mark);
        return redirect()->route('marks.index')
            ->with('success', 'Mark details deleted successfully');
    }
}
