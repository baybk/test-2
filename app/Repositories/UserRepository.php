<?php

namespace App\Repositories;

use App\Models\User;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    public function allowRelations()
    {
        return [
            
        ];
    }
}