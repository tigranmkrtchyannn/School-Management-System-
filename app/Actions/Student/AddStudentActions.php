<?php

namespace App\Actions\Student;

use App\Repositories\StudentRepository;

class AddStudentActions
{
    protected StudentRepository $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function  run(array $data)
    {
        return $this->studentRepository->store($data);
    }

}
