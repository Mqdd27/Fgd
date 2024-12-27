@extends('layouts.master')


{{-- @section('title', 'User Dashboard') --}}

@section('content')
    <div class="container mt-4">
        <h1>Welcome {{ Auth::user()->name }}!!</h1>
    </div>
@endsection
