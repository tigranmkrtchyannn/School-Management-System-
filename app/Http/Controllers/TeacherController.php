<?php

namespace App\Http\Controllers;

use App\Actions\Teacher\AddTeacherAction;
use App\Actions\Teacher\AllTeacherAction;
use App\Actions\Teacher\DeleteTeacherAction;
use App\Actions\Teacher\FindTeacherAction;
use App\Actions\Teacher\UpdateTeacherAction;
use App\Http\Requests\TeacherRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TeacherController extends Controller
{
    public function index(AllTeacherAction $action): View
    {
        $teachers = $action->execute();

        return view('teacher.index')->with('teachers', $teachers);

    }

    public function create(): View
    {
        return view('teacher.create');
    }

    public function store(TeacherRequest $request, AddTeacherAction $actions): RedirectResponse
    {
        $data = $request->all();
        $actions->run($data);

        return redirect('teacher')->with('flash_message', 'Teacher added!');
    }


    public function show(int $id, FindTeacherAction $action): View
    {
        $student = $action->execute($id);

        return view('teacher.show')->with('student', $student);
    }

    public function edit(string $id, FindTeacherAction $action): View
    {
        $student = $action->execute($id);
        return view('teacher.edit')->with('teacher', $student);

    }

    public function update(TeacherRequest $request, int $id, UpdateTeacherAction $action)
    {
        $data = $request->all();
        $student = $action->execute($data, $id);

        return redirect('teacher')->with('flash_message', 'Teacher updated!');
    }


    public function destroy(int $id, DeleteTeacherAction $action): RedirectResponse
    {
        $action->execute($id);

        return redirect('teacher')->with('flash_message', 'Teacher deleted!');
    }
}


