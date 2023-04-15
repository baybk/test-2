<?php

namespace App\Services\Web\Course;

use App\Services\Action;
use App\Repositories\CourseRepository;

class DeleteCourseAction extends Action
{
    protected $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($courseId)
    {
        try {
            $post =  $this->repository->delete($courseId);
            return true;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}