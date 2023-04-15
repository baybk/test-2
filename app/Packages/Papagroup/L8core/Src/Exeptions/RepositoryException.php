<?php

namespace App\Packages\Papagroup\L8core\Src\Exceptions;

use App\Packages\Papagroup\L8core\Src\Exceptions\BaseException;

class RepositoryException extends BaseException
{
    public static function invalidMethod()
    {
        return self::code('repository.invalid_method');
    }

    public static function invalidModel()
    {
        return self::code('repository.invalid_model');
    }
}
