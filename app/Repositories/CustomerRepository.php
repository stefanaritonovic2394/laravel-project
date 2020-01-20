<?php

namespace App\Repositories;

use App\Abstracts\AbstractRepository;
use App\Customer;
use App\Interfaces\CustomerRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CustomerRepository extends AbstractRepository implements CustomerRepositoryInterface
{
    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = new Customer();
    }

    public function allCompanies() : Collection
    {
        return $this->model->company()->get();
    }

}
