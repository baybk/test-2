<?php

namespace App\Packages\Papagroup\L8core\Src\Traits;

use Illuminate\Support\Facades\DB;

trait Transaction
{
    protected function beginTransaction()
    {
        DB::beginTransaction();
    }

    protected function commit()
    {
        DB::commit();
    }

    protected function rollback()
    {
        DB::rollback();
    }
}
