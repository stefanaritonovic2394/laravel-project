<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use App\Http\Requests\CustomerRequest;
use App\Interfaces\RepositoryInterface;
use App\Role;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerRepository;
    protected $companyRepository;

    public function __construct(RepositoryInterface $customerRepository, RepositoryInterface $companyRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->companyRepository = $companyRepository;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $active_customers = $this->customerRepository->active();
        $inactive_customers = $this->customerRepository->inactive();
        return view('customers.index', compact('active_customers', 'inactive_customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Customer $customer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Customer $customer)
    {
//        $customer = new Customer;
        $roles = Role::all();
        $companies = $this->companyRepository->all();
        return view('customers.create', compact('customer', 'companies', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Customer $customer
     * @param CustomerRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Customer $customer, CustomerRequest $request)
    {
        $validated = $request->validated();
        $this->customerRepository->create($validated);
        if ($request->roles) {
            $customer->roles()->attach($request->roles);
        }

        return redirect()->route('customers.index')->with('success', 'Customer created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $customer = $this->customerRepository->find($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $customer = $this->customerRepository->find($id);
        $companies = Company::all();
        return view('customers.edit', compact('customer', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CustomerRequest $request, $id)
    {
        $validated = $request->validated();
        $this->customerRepository->update($validated, $id);

        return redirect()->route('customers.index')->with('success', 'Customer updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $this->customerRepository->delete($id);
        return redirect()->route('customers.index')->with('success', 'Customer deleted');
    }
}
