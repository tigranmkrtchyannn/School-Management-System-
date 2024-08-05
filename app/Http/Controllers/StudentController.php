<?php

namespace App\Http\Controllers;

use App\Actions\Student\AddStudentActions;
use App\Actions\Student\AllStudentAction;
use App\Actions\Student\DeleteStudentAction;
use App\Actions\Student\FindStudentAction;
use App\Actions\Student\UpdateStudentAction;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StudentController extends Controller
{
    public function index(AllStudentAction $action): View
    {
        $students = $action->execute();

        return view('student.index')->with('students', $students);

    }

    public function create(): View
    {
        return view('student.create');
    }
    public function store(StudentRequest $request,AddStudentActions $actions): RedirectResponse
    {
        $data = $request->all();

        $actions->run($data);

        return redirect('student')->with('flash_message','Student added!');
    }


    public function show(int $id, FindStudentAction $action): View
    {
        $student = $action->execute($id);

        return view('student.show')->with('student', $student);
    }
    public function edit(string $id,FindStudentAction $action): View
    {
        $student = $action->execute($id);
        return view('student.edit')->with('student', $student);
    }

    public function update(StudentRequest $request, int $id, UpdateStudentAction $action)
    {
        $data = $request->all();
        $student = $action->execute($data,$id);

        return redirect('student')->with('flash_message','Student updated!');
    }



    public function destroy(int $id, DeleteStudentAction $action): RedirectResponse
    {
        $action->execute($id);

        return redirect('student')->with('flash_message','Student deleted!');
    }
}
