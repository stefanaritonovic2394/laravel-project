<?php

namespace App\Abstracts;

use App\Customer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{
    protected $model;

    abstract public function setModel();

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function all() : Collection
    {
        return $this->model::all();
    }

    public function create(array $data)
    {
        $this->model::create($data);
    }

    public function update(array $data, int $id)
    {
        $this->model::findOrFail($id)->update($data);
    }

    public function delete(int $id)
    {
        $this->model::destroy($id);
    }

}
