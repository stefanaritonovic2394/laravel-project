@extends('layouts.app')

@section('content')
    <a href="{{route('customers.index')}}" class="btn btn-info mt-2">Go back</a>
    <div class="card mt-3" style="">
        <div class="card-header">Customer</div>
        <div class="card-body">
            <h5 class="card-title">{{$customer->name}}</h5>
            <p class="card-text">{{$customer->email}}</p>
            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-warning">Edit</a>

            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="float-right">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div>
@endsection
