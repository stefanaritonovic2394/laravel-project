@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1>All Users</h1>
    @if(count($users) > 0)
        @foreach($users as $user)
            <h3>{{$user->name}} {{$user->email}}</h3>
        @endforeach
    @else
        <p>No users found!</p>
    @endif
@endsection
