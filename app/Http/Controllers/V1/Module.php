<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Client\Request;

class Module extends Controller
{
    public function index()
    {
        return $this->business->index();
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