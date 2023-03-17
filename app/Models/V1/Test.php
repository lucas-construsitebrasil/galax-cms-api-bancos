<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use IsClientDataBase;

    protected $table = "produtos";
}
