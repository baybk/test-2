<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Services\Web\Post\CreatePostAction;
use App\Services\Web\Post\CreateReplyAction;
use App\Services\Web\Post\DeletePostAction;
use App\Services\Web\Post\EditPostAction;
use App\Services\Web\TopPage\GetIndexInfoAction;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function __construct()
    {
        
    }
}
