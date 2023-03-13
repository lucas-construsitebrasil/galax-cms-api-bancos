<?php

namespace App\Lib\Log\Exceptions;

use Exception;

class InvalidMethodLog extends Exception
{
    public function __construct()
    {
        parent::__construct('Não existe um método para gerar log com este paramêtro');
    }
}
