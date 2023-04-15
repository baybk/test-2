<?php

namespace App\Services\Web\Reply;

use App\Services\Action;
use App\Repositories\ReplyRepository;
use App\Http\Resources\ReplyResource;
use App\Models\Post;

class CreateReplyAction extends Action
{
    protected $repository;

    public function __construct(ReplyRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($userId, $postId, $data)
    {
        try {
            $data1 = [
                'user_id' => $userId,
                'post_id' => $postId,
            ];
            $dataCreate =  array_merge($data1, $data);

            $post =  $this->repository->create($dataCreate);
            
            return new ReplyResource($post);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}