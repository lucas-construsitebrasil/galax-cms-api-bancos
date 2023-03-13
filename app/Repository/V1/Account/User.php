<?php

namespace App\Repository\V1\Account;

use App\Repository\Interfaces\Account\User as Contract;
use App\Repository\V1\BaseRepository;
use Spatie\QueryBuilder\QueryBuilder;

class User extends BaseRepository implements Contract
{
    public function get()
    {
        return QueryBuilder::for($this->model::class)
            ->allowedFilters([
                'id_login', 'servidor_login',
                'dominio_login', 'bln_status_login', 'is_cms_centralizado_login'
            ])
            ->paginate();
    }
}
