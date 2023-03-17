<?php

namespace App\Business\V1;

use App\Business\V1\Business;

class Test
{
    use Business;

    public function test()
    {
        return $this->repository->test();
    }
}
