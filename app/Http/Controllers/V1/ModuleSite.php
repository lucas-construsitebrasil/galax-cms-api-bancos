<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\V1\ModuleSite as ModuleSiteRequest;
use Illuminate\Http\Client\Request;

class ModuleSite extends Controller
{
    public function index()
    {
        return $this->business->index();
    }

    public function show(Request $request)
    {
        return $this->business->show($request);
    }

    public function create(ModuleSiteRequest $request)
    {
        return $this->business->create($request);
    }

    public function delete(Request $request)
    {
        return $this->business->delete($request);
    }
}