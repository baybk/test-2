<?php

namespace App\Packages\Papagroup\L8core\Src\Contracts;

use App\Packages\Papagroup\L8core\Src\Contracts\RepositoryInterface;

interface CriteriaInterface {
    /**
     * Apply the criteria
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param RepositoryInterface $repository
     * @return void
     */
    public function apply($model, RepositoryInterface $repository);
}