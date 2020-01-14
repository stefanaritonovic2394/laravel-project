@extends('layouts.app')

@section('content')
    {{--<h1>Show Customer</h1>--}}
    <a href="{{route('customers.index')}}" class="btn btn-info mt-2">Go back</a>
    <div class="card mt-3" style="">
        <div class="card-header">Customer</div>
        <div class="card-body">
            <h5 class="card-title">{{$customer->name}}</h5>
            <p class="card-text">{{$customer->email}}</p>
            <a href="{{route('customers.edit', $customer->id)}}" class="btn btn-warning">Edit</a>

            {!! Form::open(['action' => ['CustomerController@destroy', $customer->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
