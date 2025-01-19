@extends('layouts.master')


{{-- @section('title', 'Admin Dashboard') --}}
@section('title', 'Admin Dashboard')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h3>Edit User</h3>
                <hr>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" id="role" class="form-select" required>
                            <option value="sm" {{ old('sm', $user->role) === 'sm' ? 'selected' : '' }}>SM</option>
                            <option value="supplier" {{ old('supplier', $user->role) === 'supplier' ? 'selected' : '' }}>
                                Supplier</option>
                            <option value="user" {{ old('user', $user->role) === 'user' ? 'selected' : '' }}>User
                            </option>
                        </select>
                        @error('role')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                        <button type="submit" class="btn btn-success btn-sm" name="bsimpan">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
