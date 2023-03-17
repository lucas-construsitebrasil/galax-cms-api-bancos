<?php

namespace App\Http\Controllers\V1;

use App\Business\V1\Test;
use App\Facades\Auth\DataBaseFacade;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected $business;
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        $class = '\App\Business\\' . str_replace('App\Http\Controllers\\', '', get_class($this));
        $class = str_replace('Controller', '', $class);
        if (class_exists($class)) {
            $this->business = new $class();
        }
    }

    public function test()
    {
        $test = new Test();
        // A Repository precisa ser registrada na classe RepositoryServiceProvider com sua devida interface
        // Para conectar no banco do cliente deve ser usado a trait IsClientDataBase na model.
        return $test->test();
    }
}
