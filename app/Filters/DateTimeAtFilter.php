<?php

namespace App\Filters;

use App\Packages\Papagroup\L8core\Src\Filters\BaseFilter;

class DateTimeAtFilter extends BaseFilter
{
    /**
     * Apply the filter
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param mixed $input
     * @return mixed
     */
    public static function apply($model, $input)
    {
        return $model->where(function ($qr) use ($input) {
            return $qr->where('datetime_at', '>=', $input . " 00:00:00");
        });
    }
}
