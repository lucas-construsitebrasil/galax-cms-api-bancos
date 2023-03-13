<?php

namespace App\Models\V1;

use DB;

use Illuminate\Support\Facades\App;

class Connection
{

    private string $connectionName;
    private string $host;
    private string $username;
    private string $password;
    private string $database;

    public function __construct(
        string $connectionName,
        string $host,
        string $username,
        string $password,
        string $database
    ) {
       
        $this->connectionName = $connectionName;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect(): void
    {
        if (App::environment() == 'local' || \ConstrusiteDefault\ConstrusiteConfig::isLocalServer()) {
            $this->host = 'database';
            $this->password = 'ino4020@#';
            $this->username = 'inovacao';
        }
        config(['database.connections.' . $this->connectionName => [
            'driver' => 'mysql',
            'host' => $this->host,
            'username' => $this->username,
            'password' => $this->password,
            'database' => $this->database,
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci'
        ]]);
        DB::purge($this->connectionName);
        DB::reconnect($this->connectionName);
        DB::connection($this->connectionName);
    }

    public function closeConnection(): void
    {
        DB::disconnect($this->connectionName);
    }
}
