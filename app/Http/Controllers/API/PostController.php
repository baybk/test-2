<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseUser;
use App\Models\Post;
use App\Models\User;
use App\Services\Web\Post\CreatePostAction;
use App\Services\Web\Post\DeletePostAction;
use App\Services\Web\Post\EditPostAction;
use App\Services\Web\Reply\CreateReplyAction;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        
    }
    public function create(Request $request, $courseId)
    {
        $user = auth('api')->user();
        if ($user->is_admin != USER_IS_COACH) {
            return $this->sendError([], 'You are not allowed to delete this post');
        }
        $rdata = resolve(CreatePostAction::class)->run($user->id, (int) $courseId, $request->all());
        return $this->sendSuccessWithoutMessage($rdata, 200);
    }

    public function reply(Request $request, $postId)
    {
        $user = auth('api')->user();
        $post = Post::findOrFail($postId);
        $enroll = CourseUser::where('user_id', $user->id)->where('course_id', $post->course_id)->count();
        if ($enroll <= 0) {
            return $this->sendError([], 'You do not enroll to the course', 401);
        }
        $rdata = resolve(CreateReplyAction::class)->run($user->id, $postId, $request->all());
        return $this->sendSuccessWithoutMessage($rdata, 200);
    }
}
