@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $customer->name }}" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? $customer->email }}" placeholder="Enter email address">
        </div>
        <div class="form-group">
            <label for="company_id">Company</label>
            <select id="company_id" name="company_id" class="form-control">
                <option value="" disabled>Select company</option>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : ''}}>{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="active">Status</label>
            <select id="active" name="active" class="form-control">
                <option value="" disabled>Select status</option>
                @foreach($customer->status() as $statusKey => $statusVal)
                    <option value="{{ $statusKey }}" {{ $customer->active == $statusVal ? 'selected' : ''}}>{{ $statusVal }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Edit">
    </form>
@endsection
