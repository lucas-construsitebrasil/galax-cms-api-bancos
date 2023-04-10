<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Model;

class ConfigSite extends Model
{
    use IsClientDataBase;

    protected $table = "config_site";
}
