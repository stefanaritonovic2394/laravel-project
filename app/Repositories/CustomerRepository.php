<?php

namespace App\Repositories;

use App\Customer;
use App\Interfaces\CustomerRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CustomerRepository implements CustomerRepositoryInterface
{
    public function all()
    {
        return Customer::all();
    }

    public function active() : Collection
    {
        return Customer::active(1)->get();
    }

    public function inactive() : Collection
    {
        return Customer::active(0)->get();
    }

    public function find($id)
    {
        return Customer::find($id);
    }

    public function create(array $data)
    {
        Customer::create($data);
    }

    public function update(array $data, $id)
    {
        Customer::find($id)->update($data);
    }

    public function delete($id)
    {
        Customer::destroy($id);
    }
}
