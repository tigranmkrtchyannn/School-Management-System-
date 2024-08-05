<?php

namespace App\Actions\Student;

use App\Models\Student;
use App\Repositories\StudentRepository;

class FindStudentAction
{
    protected StudentRepository $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function execute(int $id): Student
    {
        return $this->studentRepository->findStudentById($id);
    }
}
