<?php

namespace App\Filters;

use App\Packages\Papagroup\L8core\Src\Filters\BaseFilter;

class FreewordNameFilter extends BaseFilter
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
            // return $qr->orWhereRaw("CONCAT(`first_name`, ' ', `last_name`) LIKE ?", ['%' . $input . '%'])
            //     ->orWhereRaw("CONCAT(`last_name`, ' ', `first_name`) LIKE ?", ['%' . $input . '%']);
            return $qr->where('name', 'LIKE', '%' . $input . '%');
        });
    }
}
