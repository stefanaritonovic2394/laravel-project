<?php

namespace App\Interfaces;

interface CustomerRepositoryInterface
{
    public function all();
    public function active();
    public function find($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
}
