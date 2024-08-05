<?php

namespace App\Actions\Teacher;

use App\Repositories\TeacherRepository;

class DeleteTeacherAction
{
    protected TeacherRepository $teacher;

    public function __construct(TeacherRepository $teacher)
    {
      $this->teacher = $teacher;
    }

    public function execute(int $id): bool
    {
        return $this->teacher->delete($id);
    }
}
