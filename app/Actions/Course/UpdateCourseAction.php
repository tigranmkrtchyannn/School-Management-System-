<?php

namespace App\Actions\Course;

use App\Repositories\CourseRepository;

class UpdateCourseAction
{
    protected CourseRepository $course;

    public function __construct(CourseRepository $course)
    {
        $this->course = $course;
    }

    public function execute(array $data, int $id)
    {
        return $this->course->update($data, $id);
    }
}
