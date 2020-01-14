@extends('layouts.app')

@section('content')
    <h1>Create Customer</h1>
    {!! Form::open(['action' => 'CustomerController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
        </div>
        <div class="form-group">
            {{Form::label('active', 'Active')}}
            {{Form::checkbox('active', 1, ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Create', ['class' => 'btn btn-primary btn-block'])}}
    {!! Form::close() !!}
@endsection
