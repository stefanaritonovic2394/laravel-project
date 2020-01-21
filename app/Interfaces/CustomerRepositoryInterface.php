<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CustomerRepositoryInterface
{
    public function all() : Collection;
    public function active() : Collection;
    public function inactive() : Collection;
    public function find(int $id);
    public function create(array $data);
    public function update(array $data, int $id);
    public function delete(int $id);
}
