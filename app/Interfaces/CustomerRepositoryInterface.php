<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CustomerRepositoryInterface
{
    public function all();
    public function active() : Collection;
    public function inactive() : Collection;
    public function find($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
}
