<?php

namespace App\Repositories;

use App\Abstracts\AbstractRepository;
use App\Company;
use Illuminate\Database\Eloquent\Collection;

class CompanyRepository extends AbstractRepository
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
