@extends('layouts.app')

@section('content')
    <h1>Create Customer</h1>
    {!! Form::open(['action' => 'CustomerController@store', 'method' => 'POST']) !!}
        {{Form::hidden('active', '0')}}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
        </div>
        <div class="form-group">
            {{Form::label('company', 'Company')}}
            @foreach($companies as $company)
                {{Form::select('company', ['L' => $company->name, 'S' => 'Small'], null, ['class' => 'form-control', 'placeholder' => 'Select company'])}}
            @endforeach
        </div>
        <div class="form-group">
            {{Form::label('active', 'Active')}}
            {{Form::checkbox('active', 1, ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Create', ['class' => 'btn btn-primary btn-block'])}}
    {!! Form::close() !!}
@endsection
