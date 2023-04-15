<?php

namespace App\Lib;

use Illuminate\Support\Str;

trait Helper
{
    public function slugify($string)
    {
        return Str::slug($string);
    }
}
