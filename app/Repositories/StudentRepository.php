<?php

namespace App\Repositories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class StudentRepository
{
    protected function query(): Builder
    {
        return Student::query();
    }

    public function allStudents(): Collection
    {
        return $this->query()->get();
    }

    public function store(array $data)
    {
        return $this->query()->create($data);

    }

    public function findStudentById(int $id): ?Student
    {
        return $this->query()->findOrFail($id);
    }

    public function update(array $data, int $id)
    {
        return $this->query()->findOrFail($id)->update($data);
    }
    public function delete(int $id)
    {
        return $this->query()->findOrFail($id)->delete();
    }
}
