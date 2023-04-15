<?php

namespace App\Repositories;

use App\Models\Reply;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class ReplyRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return Reply::class;
    }
}