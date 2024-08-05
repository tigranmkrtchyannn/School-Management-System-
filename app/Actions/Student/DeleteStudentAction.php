<?php

namespace App\Actions\Student;

use App\Models\Student;
use App\Repositories\StudentRepository;

class DeleteStudentAction
{
    protected StudentRepository $studentRepository;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->studentRepository = $studentRepository;
    }

    public function execute(int $id): bool
    {
       return  $this->studentRepository->delete($id);
    }

}
