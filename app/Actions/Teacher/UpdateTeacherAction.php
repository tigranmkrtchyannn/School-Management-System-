<?php

namespace App\Actions\Teacher;

use App\Repositories\TeacherRepository;

class UpdateTeacherAction
{
    protected TeacherRepository $teacherRepository;

    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository = $teacherRepository;
    }

    public function execute(array $data, int $id)
    {
        return $this->teacherRepository->update($data, $id);
    }
}
