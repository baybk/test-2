<?php

namespace App\Repositories;

use App\Models\Recommended;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class RecommendedRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return Recommended::class;
    }
    
    public function allowRelations()
    {
        return [
            
        ];
    }
}