@extends('layouts.app')

@section('content')
    <h1>Edit Company</h1>
    {!! Form::open(['action' => ['CompanyController@update', $company->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $company->name, ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', $company->address, ['class' => 'form-control', 'placeholder' => 'Enter your address'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $company->email, ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Edit', ['class' => 'btn btn-primary btn-block'])}}
    {!! Form::close() !!}
@endsection
