@extends('layouts.app')

@section('content')
    <h1>Edit Company</h1>
    <form action="{{ route('companies.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') ?? $company->name }}" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') ?? $company->address }}" placeholder="Enter your address">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') ?? $company->email }}" placeholder="Enter email address">
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Edit">
    </form>
@endsection
