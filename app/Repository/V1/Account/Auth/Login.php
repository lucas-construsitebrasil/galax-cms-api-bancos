<?php

namespace App\Repository\V1\Account\Auth;

use App\Models\V1\Client\User\UserLogin;
use App\Repository\Interfaces\Account\Auth\Login as Contract;
use App\Repository\V1\BaseRepository;

class Login extends BaseRepository implements Contract
{
    public function loginByUserCredentials(UserLogin $databaseUser, string $user, string $password): UserLogin|null
    {
        return $databaseUser::where([
            'login_usuario' => $user,
            'senha_usuario' => $password,
        ])->first();
    }
}
