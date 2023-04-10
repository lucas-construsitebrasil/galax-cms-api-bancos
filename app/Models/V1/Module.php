<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use IsClientDataBase;

    protected $table = "modulos";
}
