<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Post;
use App\Services\Web\Course\CreateCourseAction;
use App\Services\Web\Course\DeleteCourseAction;
use App\Services\Web\Course\EnrollCourseAction;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct()
    {
        
    }
    public function create(Request $request)
    {
        $user = auth('api')->user();
        if ($user->is_admin == USER_IS_NOT_ADMIN) {
            return $this->sendError([], 'You are not allowed to create this course');
        }
        $rdata = resolve(CreateCourseAction::class)->run($request->all());
        return $this->sendSuccessWithoutMessage($rdata, 200);
    }

    public function delete(Request $request, $courseId)
    {
        $course = Course::findOrFail($courseId);
        $user = auth('api')->user();
        if (!$user->is_admin) {
            return $this->sendError([], 'You are not allowed to delete this post');
        }
        $rdata = resolve(DeleteCourseAction::class)->run($courseId);
        return $this->sendSuccessWithoutMessage($rdata, 200);
    }

    public function enroll(Request $request, $courseId)
    {
        $user = auth('api')->user();
        if (!$user->is_admin == USER_IS_NOT_ADMIN) {
            return $this->sendError([], 'You are not allowed to enroll this course');
        }
        $rdata = resolve(EnrollCourseAction::class)->run($user->id, $courseId);
        return $this->sendSuccessWithoutMessage($rdata, 200);
    }
}
