@extends('layouts.app')

@section('content')
    <h1>Create Customer</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email address">
        </div>
        <div class="form-group">
            <label for="company_id">Company</label>
            <select id="company_id" name="company_id" class="form-control">
                <option value="" selected disabled>Select company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="active">Status</label>
            <select id="active" name="active" class="form-control">
                <option value="" selected disabled>Select status</option>
                @foreach($customer->status() as $statusKey => $statusVal)
                    <option value="{{ $statusKey }}" {{ old('active', $customer->status()) == $statusKey ? 'selected' : '' }}>{{ $statusVal }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="roles">Role</label>
            <select id="roles" name="roles" class="form-control">
                <option value="" selected disabled>Select role</option>
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Create">
    </form>
@endsection
