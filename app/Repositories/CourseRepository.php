<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class CourseRepository
{
    protected function query(): Builder
    {
        return Course::query();
    }

    public function allCourses(): Collection
    {
        return $this->query()->get();
    }

    public function store(array $data)
    {
        return $this->query()->create($data);

    }

    public function findCourseById(int $id): ?Course
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
