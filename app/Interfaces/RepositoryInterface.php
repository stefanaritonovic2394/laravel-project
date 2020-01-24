<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface
{
    public function all() : Collection;
    public function find(int $id);
    public function create(array $data);
    public function update(array $data, int $id);
    public function delete(int $id);
}
