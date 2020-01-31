<?php

namespace App\Repositories;

use App\Abstracts\AbstractRepository;
use App\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Database\Eloquent\Collection;

class CustomerRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = new Customer();
    }

    public function active(): Collection
    {
        return $this->model->active(1)->get();
    }

    public function inactive(): Collection
    {
        return $this->model->active(0)->get();
    }

    public function attach(Customer $customer, array $data)
    {
        $customer->roles()->attach($data);
    }

}
