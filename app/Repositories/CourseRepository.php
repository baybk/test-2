<?php

namespace App\Repositories;

use App\Models\Course;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class CourseRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return Course::class;
    }
}