<?php

namespace App\Services\Web\Course;

use App\Services\Action;
use App\Http\Resources\CourseUserResource;
use App\Models\CourseUser;

class EnrollCourseAction extends Action
{

    public function __construct()
    {
    }

    public function run($userId, $courseId)
    {
        try {
            $data1 = [
                'user_id' => $userId,
                'course_id' => (int) $courseId
            ];
            $enroll =  CourseUser::create($data1);
            return new CourseUserResource($enroll);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}