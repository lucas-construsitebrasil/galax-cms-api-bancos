<?php

namespace App\Models\V1;

use App\Models\V1\Account\DataBase;

trait IsClientDataBase
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->connection = DataBase::CONNECTION_NAME;
    }
}
