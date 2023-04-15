<?php

namespace App\Repositories;

use App\Models\DiaryRecord;
use App\Packages\Papagroup\L8core\Src\Repository\BaseRepository;

class DiaryRecordRepository extends BaseRepository
{
    /**
     * Get the model of repository
     *
     * @return string
     */
    public function getModel()
    {
        return DiaryRecord::class;
    }

    public function allowRelations()
    {
        return [
            
        ];
    }
}