@extends('layouts.master')


{{-- @section('title', 'Admin Dashboard') --}}

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
                    @forelse ($barangs as $barang)
                    <tr>
                        <td>1</td>
                        <td>{{ $barang->barang }}</td>
                        <td>{{ $barang->jumlah }}</td>
                        <td class="d-flex justify-content-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barangs.destroy', $barang->id) }}" method="POST">
                                <!-- Ganti dengan route yang benar untuk SHOW dan EDIT -->
                                <a href="{{ route('barangs.show', $barang->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                <a href="{{ route('barangs.edit', $barang->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger text-center">
                                Data Barang belum Tersedia.
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
            @if(session('success'))
                Swal.fire({
                    icon: "success",
                    title: "BERHASIL",
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 2000
                });
            @elseif(session('error'))
                Swal.fire({
                    icon: "error",
                    title: "GAGAL!",
                    text: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 2000
                });
            @endif

        </script>

        <div class="card-footer">
            <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
        </div>
    </div>
@endsection
