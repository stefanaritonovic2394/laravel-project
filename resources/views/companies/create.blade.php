@extends('layouts.app')

@section('content')
    <h1>Create Company</h1>
    {!! Form::open(['action' => 'CompanyController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', old('address'), ['class' => 'form-control', 'placeholder' => 'Enter your address'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
        </div>
        {{Form::submit('Create', ['class' => 'btn btn-primary btn-block'])}}
    {!! Form::close() !!}
@endsection
