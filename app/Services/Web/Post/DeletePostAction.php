<?php

namespace App\Services\Web\Post;

use App\Services\Action;
use App\Repositories\PostRepository;
use App\Http\Resources\PostResource;

class DeletePostAction extends Action
{
    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($postId)
    {
        try {
            $post =  $this->repository->delete($postId);
            return true;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}