<?php

namespace App\Repository\V1;

use App\Repository\Interfaces\BaseContractRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseContractRepository
{

    protected $model;

    public function __construct()
    {
        $class = '\App\Models\\' . str_replace('App\Repository\\', '', get_class($this));
        if (class_exists($class)) {
            $this->model = new $class();
        }
    }

    public function findById(int $id): Model
    {
        return $this->model->findOrFail($id);
    }

    public function findAll(): Collection
    {
        return $this->model->get();
    }
}
