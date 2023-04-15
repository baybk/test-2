<?php

namespace App\Services\Web\Course;

use App\Services\Action;
use App\Repositories\PostRepository;
use App\Http\Resources\PostResource;

class EditCourseAction extends Action
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($postId, $data)
    {
        try {
            $post =  $this->repository->update($postId, $data);
            return new PostResource($post);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}