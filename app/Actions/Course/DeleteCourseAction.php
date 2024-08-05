<?php

namespace App\Actions\Course;

use App\Repositories\CourseRepository;

class DeleteCourseAction
{
    protected CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function execute(int $id): bool
    {
        return  $this->courseRepository->delete($id);
    }
}
