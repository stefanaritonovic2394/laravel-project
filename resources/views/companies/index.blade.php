@extends('layouts.app')

@section('title', 'Companies')

@section('content')
    <h1>All Companies</h1>
    <a href="{{route('companies.create')}}" class="btn btn-success mb-2">Create new company</a>
    @component('companies.list', ['companies' => $companies, 'title' => ''])
    @endcomponent
@endsection
