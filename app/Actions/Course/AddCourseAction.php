<?php

namespace App\Actions\Course;

use App\Repositories\CourseRepository;

class AddCourseAction
{

    protected CourseRepository $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function run(array $data)
    {
        return $this->courseRepository->store($data);
    }
}
