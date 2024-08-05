<?php

namespace App\Actions\Teacher;

use App\Models\Teacher;
use App\Repositories\TeacherRepository;

class FindTeacherAction
{
    protected TeacherRepository $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function execute(int $id): Teacher
    {
        return $this->teacherRepository->findTeacherById($id);
    }
}
