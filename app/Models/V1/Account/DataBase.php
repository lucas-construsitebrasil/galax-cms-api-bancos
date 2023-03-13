<?php

namespace App\Models\V1\Account;

use App\Facades\Auth\DataBaseFacade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class DataBase extends Model implements DatabaseContract
{
    const CONNECTION_NAME = 'customer_mysql';

    private string|null $host, $name, $user, $password;

    private int $id;

    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function connect(): void
    {
        if (App::environment() == 'local') {
            $this->host = 'localhost';
            $this->password = '';
        }
        if ($this->host == 'localhost') {
            $this->host = 'galaxcms.com.br';
        }
        $this->conection = new \App\Models\V1\Connection(
            self::CONNECTION_NAME,
            $this->host,
            $this->user,
            $this->password,
            $this->name
        );
        $this->conection->connect();
    }

    public static function connectDatabase(): void
    {
        try {
            DB::connection(self::CONNECTION_NAME)->getPDO();
        } catch (\Exception $e) {
            DataBaseFacade::connect();
        }
    }

    public function closeConnection(): void
    {
        $this->conection->closeConnection(self::CONNECTION_NAME);
    }
}
