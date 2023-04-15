<?php

namespace App\Repositories;

use App\Models\BodyRecord;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class BodyRecordRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return BodyRecord::class;
    }

    public function allowRelations()
    {
        return [
            
        ];
    }
}