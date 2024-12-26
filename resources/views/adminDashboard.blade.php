@extends('layouts.master')


@section('title', 'Admin Dashboard')

@section('content')
    <div class="container mt-4">
        <h1>Welcome {{ Auth::user()->name }}!!</h1>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-light">
                    <th>No</th>
                    <th>Barang</th>
                    <th>Jumlah</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Barang 1</td>
                        <td>10</td>
                        <td class="d-flex justify-content-center">
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                            <a href="#" class="btn btn-sm btn-danger mx-1">Delete</a>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
        </div>
    </div>
@endsection
