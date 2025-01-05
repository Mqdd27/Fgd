@extends('layouts.master')


{{-- @section('title', 'Admin Dashboard') --}}

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <p>Nama Barang : {{ $wr->dstrc_ori }}</p>
                        <p>Jumlah : {{ $wr->qty_req }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection
