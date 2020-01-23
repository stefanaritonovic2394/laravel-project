<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Interfaces\CompanyRepositoryInterface;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    protected $companyRepository;

    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = $this->companyRepository->all();
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(CompanyRequest $request)
    {
        $validated = $request->validated();
        $this->companyRepository->create($validated);

        return redirect()->route('companies.index')->with('success', 'Company created');
    }

    public function show($id)
    {
        $company = $this->companyRepository->find($id);
        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = $this->companyRepository->find($id);
        return view('companies.edit', compact('company'));
    }

    public function update(CompanyRequest $request, $id)
    {
        $validated = $request->validated();
        $this->companyRepository->update($validated, $id);

        return redirect()->route('companies.index')->with('success', 'Company updated');
    }

    public function destroy($id)
    {
        $customer = $this->companyRepository->delete($id);
        return redirect()->route('companies.index')->with('success', 'Company deleted');
    }

}
