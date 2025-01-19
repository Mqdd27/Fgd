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
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead class="table-light">
                            <tr>
                                <th style="white-space: nowrap;">No</th>
                                <th style="white-space: nowrap;">Name</th>
                                <th style="white-space: nowrap;">email</th>
                                <th style="white-space: nowrap;">role</th>
                                <th style="white-space: nowrap;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $index => $user)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                            onsubmit="return confirm('Apakah Anda Yakin ?');" class="d-flex gap-2">
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>

                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="16">
                                        <div class="alert alert-danger text-center">
                                            Tidak User yang terdaftar
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script>
                    //message with sweetalert
                    @if (session('success'))
                        Swal.fire({
                            icon: "success",
                            title: "BERHASIL",
                            text: "{{ session('success') }}",
                            showConfirmButton: false,
                            timer: 2000
                        });
                    @elseif (session('error'))
                        Swal.fire({
                            icon: "error",
                            title: "GAGAL!",
                            text: "{{ session('error') }}",
                            showConfirmButton: false,
                            timer: 2000
                        });
                    @endif
                </script>
            </div>
        </div>

    @endsection
