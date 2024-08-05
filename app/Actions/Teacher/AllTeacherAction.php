<?php

namespace App\Actions\Teacher;

use App\Repositories\TeacherRepository;

class AllTeacherAction
{
    protected TeacherRepository $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function execute()
    {
        return $this->teacherRepository->allTeachers();
    }


}
