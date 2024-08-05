<?php

namespace App\Actions\Course;

use App\Repositories\CourseRepository;

class AllCourseAction
{
    protected CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }
    public function execute()
    {
        return $this->courseRepository->allCourses();
    }
}
