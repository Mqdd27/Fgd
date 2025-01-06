@extends('layouts.master')


{{-- @section('title', 'Admin Dashboard') --}}
@section('title', 'Admin Dashboard')

@section('content')
    <div class="container mt-4">
        <h1>Welcome {{ Auth::user()->name }}!!</h1>
        <div class="card-body">
            <a href="{{ route('wr.create') }}" class="btn btn-md btn-success mb-3">Add</a>
            <br>
            <tr>
                <th colspan="3">
                    List Of Users
                    <a class="btn btn-warning float-end mb-2" href="{{ route('wr.export') }}"><i class="fa fa-download"></i>
                        Export User Data</a>
                </th>
            </tr>
            <br>
            <div style="overflow-x: auto;">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th style="white-space: nowrap;">No</th>
                            <th style="white-space: nowrap;">DSTRC_ORI</th>
                            <th style="white-space: nowrap;">CREATION_DATE</th>
                            <th style="white-space: nowrap;">AUTHSD_DATE</th>
                            <th style="white-space: nowrap;">WO_DESC</th>
                            <th style="white-space: nowrap;">ACUAN PLAN SERVICE</th>
                            <th style="white-space: nowrap;">Componen_Desc</th>
                            <th style="white-space: nowrap;">EGI</th>
                            <th style="white-space: nowrap;">EGI ENG</th>
                            <th style="white-space: nowrap;">EQUIP_NO</th>
                            <th style="white-space: nowrap;">Plant Process</th>
                            <th style="white-space: nowrap;">Plant Activity</th>
                            <th style="white-space: nowrap;">WR_NO</th>
                            <th style="white-space: nowrap;">WR_ITEM</th>
                            <th style="white-space: nowrap;">QTY_REQ</th>
                            <th style="white-space: nowrap;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($wr as $index => $wr)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $wr->dstrc_ori }}</td>
                                <td>{{ $wr->creation_date }}</td>
                                <td>{{ $wr->authsd_date }}</td>
                                <td>{{ $wr->wo_desc }}</td>
                                <td>{{ $wr->acuan_plan_service }}</td>
                                <td>{{ $wr->componen_desc }}</td>
                                <td>{{ $wr->egi }}</td>
                                <td>{{ $wr->egi_eng }}</td>
                                <td>{{ $wr->equip_no }}</td>
                                <td>{{ $wr->plant_process }}</td>
                                <td>{{ $wr->plant_activity }}</td>
                                <td>{{ $wr->wr_no }}</td>
                                <td>{{ $wr->wr_item }}</td>
                                <td>{{ $wr->qty_req }}</td>
                                <td class="d-flex justify-content-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('barangs.destroy', $wr->id) }}" method="POST">
                                        <a href="{{ route('barangs.show', $wr->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('barangs.edit', $wr->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="16">
                                    <div class="alert alert-danger text-center">
                                        Data Barang belum tersedia.
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

            <div class="card-footer">
                <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
            </div>
        </div>
    @endsection
