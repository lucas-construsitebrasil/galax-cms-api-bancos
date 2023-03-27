<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Client\Request;

class ModulosSite extends Controller
{
    public function index()
    {
        return $this->business->test();
    }

    public function show(Request $request)
    {
        return $this->business->show($request);
    }

    public function create()
    {
        return $this->business->create();
    }

    public function delete(Request $request)
    {
        return $this->business->delete($request);
    }
}