@extends('layouts.master')


{{-- @section('title', 'Supplier Dashboard') --}}
@section('title', 'Supplier Dashboard')

@section('content')
    <div class="container mt-4">
        <h1>Welcome {{ Auth::user()->name }}!!</h1>
    </div>
@endsection
