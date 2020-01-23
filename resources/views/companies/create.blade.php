@extends('layouts.app')

@section('content')
    <h1>Create Company</h1>
    <form action="{{ route('companies.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" placeholder="Enter your address">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="Enter email address">
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Create">
    </form>
@endsection
