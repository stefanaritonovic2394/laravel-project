@extends('layouts.app')

@section('content')
    {{--<h1>Show Customer</h1>--}}
    <a href="{{route('companies.index')}}" class="btn btn-info mt-2">Go back</a>
    <div class="card mt-3" style="">
        <div class="card-header">Company</div>
        <div class="card-body">
            <h5 class="card-title">{{$company->name}}</h5>
            <p class="card-text">{{$company->address}}</p>
            <p class="card-text">{{$company->email}}</p>
            <h4>Customers</h4>
            @foreach($company->customers as $customer)
                <ul class="list-group">
                    <li class="list-group-item mb-3">{{ $customer->name }}</li>
                </ul>
            @endforeach
            <a href="{{route('companies.edit', $company->id)}}" class="btn btn-warning">Edit</a>

            {!! Form::open(['action' => ['CompanyController@destroy', $company->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
