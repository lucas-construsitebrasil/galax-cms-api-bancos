<?php

namespace App\Models\V1\Account;

interface DatabaseContract
{
    public function connect(): void;

    public static function connectDatabase();

    public function closeConnection(): void;
}
