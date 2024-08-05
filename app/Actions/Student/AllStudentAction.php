<?php

namespace App\Actions\Student;

use App\Repositories\StudentRepository;

class AllStudentAction
{
    protected StudentRepository $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }
    public function execute()
    {
        return $this->studentRepository->allStudents();
    }
}
