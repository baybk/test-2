<?php

namespace App\Services\Web\Course;

use App\Services\Action;
use App\Repositories\CourseRepository;
use App\Http\Resources\CourseResource;

class CreateCourseAction extends Action
{
    protected $repository;

    public function __construct(CourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($data)
    {
        try {
            $course =  $this->repository->create($data);
            
            return new CourseResource($course);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}