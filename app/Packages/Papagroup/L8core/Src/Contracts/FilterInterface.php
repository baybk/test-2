<?php

namespace App\Packages\Papagroup\L8core\Src\Contracts;

interface FilterInterface {
    /**
     * Apply the filter
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param mixed $input
     * @return mixed
     */
    public static function apply($model, $input);
}