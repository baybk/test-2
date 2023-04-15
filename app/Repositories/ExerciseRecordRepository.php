<?php

namespace App\Repositories;

use App\Models\ExerciseRecord;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class ExerciseRecordRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return ExerciseRecord::class;
    }

    public function allowRelations()
    {
        return [
            
        ];
    }
}