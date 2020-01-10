@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <h1>All Customers</h1>
    <a href="{{route('customers.create')}}" class="btn btn-success mb-2">Create new customer</a>
    @foreach($customers as $customer)
        <h3>{{$customer->name}}</h3>
    @endforeach
@endsection
