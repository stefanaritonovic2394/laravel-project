@extends('layouts.app')

@section('content')
    <h1>Create Customer</h1>
    {!! Form::open(['action' => 'CustomerController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter email address'])}}
        </div>
{{--        @php $select = []; @endphp--}}
{{--        @foreach ($companies as $company)--}}
{{--            {{ $select[$company->id] = $company->name }}--}}
{{--        @endforeach--}}
        <div class="form-group">
            {{Form::label('company_id', 'Company')}}
            {{Form::select('company_id', $select, null, ['class' => 'form-control', 'placeholder' => 'Select company'])}}
        </div>
        <div class="form-group">
            {{Form::label('active', 'Status')}}
            {{Form::select('active', $active, null, ['class' => 'form-control', 'placeholder' => 'Select status'])}}
        </div>
        {{Form::submit('Create', ['class' => 'btn btn-primary btn-block'])}}
    {!! Form::close() !!}
@endsection
