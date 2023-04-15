<?php

namespace App\Repositories;

use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;
use App\Models\Post;

class PostRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }
}