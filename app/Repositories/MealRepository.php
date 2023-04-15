<?php

namespace App\Repositories;

use App\Models\Meal;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class MealRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return Meal::class;
    }

    public function allowRelations()
    {
        return [
            
        ];
    }
}