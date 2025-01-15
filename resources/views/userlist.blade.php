@extends('layouts.master')

@section('title', 'User Lists')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>
                    Registered Users
                </h1>
            </div>
            <div class="card-body">
                <ul>
                    @foreach ($users as $user)
                        <li>Name: {{ $user->name }} ({{ $user->email }}) as {{ $user->role }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
