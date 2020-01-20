<?php

namespace App\Repositories;

use App\Abstracts\AbstractRepository;
use App\Company;
use App\Interfaces\CompanyRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository extends AbstractRepository implements CompanyRepositoryInterface
{
    public function __construct()
    {
        $this->setModel();
    }

    public function setModel()
    {
        $this->model = new Company();
    }

}
