@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <h1>All Customers</h1>
    <a href="{{route('customers.create')}}" class="btn btn-success mb-2">Create new customer</a>
    @component('customers.list', ['customers' => $active_customers, 'title' => 'Active'])
    @endcomponent
    @component('customers.list', ['customers' => $inactive_customers, 'title' => 'Inactive'])
    @endcomponent
@endsection
