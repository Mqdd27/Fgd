@extends('layouts.master')


@section('title', 'Supplier Dashboard')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h1>Welcome {{ Auth::user()->name }}!!</h1>
                </div>
            </div>
            <div class="card-body">
                <a href="{{ route('wr.create') }}" class="btn btn-md btn-success">Add</a>
                <br>

                <div class="d-flex flex-row-reverse">
                    <a class="btn btn-warning mb-2" href="{{ route('wr.export') }}"><i class="fa fa-download"></i>
                        Export User Data</a>
                </div>

                <br>
                <div class="table-responsive">
                    <table id="datatable" class="table" data-toggle="data-table">
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
                                <th style="white-space: nowrap;">Stock_Code</th>
                                <th style="white-space: nowrap;">Price_Code</th>
                                <th style="white-space: nowrap;">ITEM_NAME</th>
                                <th style="white-space: nowrap;">CLASS</th>
                                <th style="white-space: nowrap;">Current Class</th>
                                <th style="white-space: nowrap;">Mnemonic Current</th>
                                <th style="white-space: nowrap;">PN Current</th>
                                <th style="white-space: nowrap;">PN Global</th>
                                <th style="white-space: nowrap;">WH</th>
                                <th style="white-space: nowrap;">UOI</th>
                                <th style="white-space: nowrap;">Notes</th>
                                <th style="white-space: nowrap;">Status</th>
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
                                    <td>{{ $wr->stock_code }}</td>
                                    <td>{{ $wr->price_code }}</td>
                                    <td>{{ $wr->item_name }}</td>
                                    <td>{{ $wr->class }}</td>
                                    <td>{{ $wr->current_class }}</td>
                                    <td>{{ $wr->mnemonic_current }}</td>
                                    <td>{{ $wr->pn_current }}</td>
                                    <td>{{ $wr->pn_global }}</td>
                                    <td>{{ $wr->wh }}</td>
                                    <td>{{ $wr->uoi }}</td>
                                    <td>{{ $wr->notes }}</td>
                                    <td>{{ $wr->status }}</td>
                                    <td class="d-flex justify-content-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('wr.destroy', $wr->id) }}" method="POST"
                                            class="d-flex gap-2">
                                            <a href="{{ route('wr.show', $wr->id) }}" class="btn btn-sm btn-dark">Show</a>
                                            <a href="{{ route('wr.edit', $wr->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
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
            </div>
        </div>
    </div>
@endsection
