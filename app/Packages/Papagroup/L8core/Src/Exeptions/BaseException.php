<?php

namespace App\Packages\Papagroup\L8core\Src\Exceptions;

use Exception;

class BaseException extends Exception
{
    protected $code = 400;

    protected $messageCode = null;

    public function setMessageCode(string $code)
    {
        $this->messageCode = $code;

        return $this;
    }

    public function getMessageCode()
    {
        return $this->messageCode;
    }

    public static function code($code, $args = [], $statusCode = 400)
    {
        return (new static(__('messages.' . $code, $args), $statusCode))->setMessageCode($code);
    }
}
