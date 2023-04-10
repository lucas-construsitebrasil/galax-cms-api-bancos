<?php

namespace App\Repository\Interfaces;

use App\Models\V1\ConfigSite as ConfigSiteModel;
use Illuminate\Database\Eloquent\Collection;

interface ConfigSite
{
    public function index(): Collection;
}
