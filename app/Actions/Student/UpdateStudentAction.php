<?php

namespace App\Actions\Student;

use App\Repositories\StudentRepository;

class UpdateStudentAction
{
    protected StudentRepository $student;

    public function __construct(StudentRepository $student)
    {
        $this->student = $student;
    }

    public function execute(array $data, int $id)
    {
        return $this->student->update($data, $id);
    }
}
