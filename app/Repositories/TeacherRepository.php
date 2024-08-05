<?php

namespace App\Repositories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class TeacherRepository
{
    protected function query(): Builder
    {
        return Teacher::query();
    }

    public function allTeachers(): Collection
    {
        return $this->query()->get();
    }

    public function store(array $data)
    {
        return $this->query()->create($data);

    }

    public function findTeacherById(int $id): ?Teacher
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

