<?php

namespace App\Actions\Course;

use App\Models\Course;
use App\Repositories\CourseRepository;

class FindCourseAction
{
    protected CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function execute(int $id): Course
    {
        return $this->courseRepository->findCourseById($id);
    }

}
