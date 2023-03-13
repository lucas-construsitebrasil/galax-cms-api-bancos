<?php

namespace App\Business\V1;

trait Business
{
    private $repository;


    public function __construct()
    {
        $class = '\App\Repository\Interfaces\\' . str_replace('App\Business\\', '', get_class($this));
        $class = str_replace('V1\\', '', $class);
        if (interface_exists($class)) {
            $interfaceName = substr($class, 1);
            $this->repository = app()->make($interfaceName);
        }
    }
}
