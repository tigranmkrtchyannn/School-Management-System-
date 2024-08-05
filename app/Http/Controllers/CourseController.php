<?php

namespace App\Http\Controllers;

use App\Actions\Course\AddCourseAction;
use App\Actions\Course\AllCourseAction;
use App\Actions\Course\DeleteCourseAction;
use App\Actions\Course\FindCourseAction;
use App\Actions\Course\UpdateCourseAction;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(AllCourseAction $action)
    {
        $courses = $action->execute();

        return view('course.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,AddCourseAction $action)
    {
        $data = $request->all();
        $action->run($data);

        return redirect('course')->with('flash_message','Course added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id,FindCourseAction $action)
    {
        $course = $action->execute($id);
        return view('course.show')->with('course', $course);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id,FindCourseAction $action)
    {
        $course = $action->execute($id);
        return view('course.edit')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id,UpdateCourseAction $action)
    {
        $data = $request->all();
        $course = $action->execute($data,$id);

        return redirect('course')->with('flash_message','Course updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id,DeleteCourseAction $action)
    {
        $action->execute($id);

        return redirect('course')->with('flash_message','Course deleted!');
    }
}
