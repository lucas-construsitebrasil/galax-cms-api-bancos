<?php

namespace App\Repository\Interfaces\Account\Auth;

use App\Models\V1\Client\User\UserLogin;

interface Login
{
    public function loginByUserCredentials(UserLogin $databaseUser, string $user, string $password): UserLogin|null;
}
