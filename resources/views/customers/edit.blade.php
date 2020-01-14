@extends('layouts.app')

@section('content')
    <h1>Edit Customer</h1>
    {!! Form::open(['action' => ['CustomerController@update', $customer->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $customer->name, ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', $customer->email, ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
        </div>
        <div class="form-group">
            {{Form::label('active', 'Active')}}
            {{Form::checkbox('active', $customer->active, ['class' => 'form-control'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Edit', ['class' => 'btn btn-primary btn-block'])}}
    {!! Form::close() !!}
@endsection
