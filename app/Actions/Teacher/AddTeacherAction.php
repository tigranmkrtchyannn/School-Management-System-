<?php

namespace App\Actions\Teacher;


use App\Repositories\TeacherRepository;

class AddTeacherAction
{
    protected TeacherRepository $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function run(array $data)
    {
        return $this->teacherRepository->store($data);
    }


}
