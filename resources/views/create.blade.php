@extends('layouts.master')


@section('title', 'Add WR')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="card">
            {{-- <div class="card-header">Tambahkan Barang</div> --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="{{ route('wr.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">DSTRC_ORI</label>
                                    <input type="text" class="form-control @error('dstrc_ori') is-invalid @enderror"
                                        name="dstrc_ori" value="{{ old('dstrc_ori') }}" placeholder="Insert DSTRC_ORI">

                                    <!-- error message untuk title -->
                                    @error('dstrc_ori')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mb-3">Creation Date</label>
                                            <input type="date"
                                                class="form-control @error('creation_date') is-invalid @enderror"
                                                name="creation_date" value="{{ old('creation_date') }}">

                                            <!-- error message untuk title -->
                                            @error('creation_date')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mb-3">AUTHSD_DATE</label>
                                            <input type="date"
                                                class="form-control @error('authsd_date') is-invalid @enderror"
                                                name="authsd_date" value="{{ old('authsd_date') }}">

                                            <!-- error message untuk title -->
                                            @error('authsd_date')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">WO_Desc</label>
                                    <input type="text" class="form-control @error('wo_desc') is-invalid @enderror"
                                        name="wo_desc" value="{{ old('wo_desc') }}" placeholder="Insert WO_DESC">

                                    <!-- error message untuk title -->
                                    @error('wo_desc')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mb-3">Acuan Plan Service</label>
                                            <input type="date"
                                                class="form-control @error('acuan_plan_service') is-invalid @enderror"
                                                name="acuan_plan_service" value="{{ old('acuan_plan_service') }}">

                                            <!-- error message untuk title -->
                                            @error('acuan_plan_service')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">Componen Desc</label>
                                    <input type="text" class="form-control @error('componen_desc') is-invalid @enderror"
                                        name="componen_desc" value="{{ old('componen_desc') }}"
                                        placeholder="Insert Componen Desc">

                                    <!-- error message untuk title -->
                                    @error('componen_desc')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">EGI</label>
                                    <input type="text" style="text-transform:uppercase"
                                        class="form-control @error('egi') is-invalid @enderror" name="egi"
                                        value="{{ old('egi') }}" placeholder="Insert EGI">

                                    <!-- error message untuk title -->
                                    @error('egi')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">EGI ENG</label>
                                    <input type="text" style="text-transform:uppercase"
                                        class="form-control @error('egi_eng') is-invalid @enderror" name="egi_eng"
                                        value="{{ old('egi_eng') }}" placeholder="Insert EGI ENG">

                                    <!-- error message untuk title -->
                                    @error('egi_eng')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">EQUIP_NO</label>
                                    <input type="text" class="form-control @error('equip_no') is-invalid @enderror"
                                        name="equip_no" value="{{ old('equip_no') }}" placeholder="Insert EQUIP_NO">

                                    <!-- error message untuk title -->
                                    @error('equip_no')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mb-3">Plant Process</label>
                                            <select class="form-select @error('plant_process') is-invalid @enderror"
                                                aria-label="Default select example" name="plant_process"
                                                value="{{ old('plant_process') }}">
                                                <option value="" disabled selected hidden>--- Insert Plant Process ---
                                                </option>
                                                <option value="SCHEDULED">SCHEDULED</option>
                                                <option value="NON PLANT">NON PLANT</option>
                                            </select>
                                            <!-- error message untuk title -->
                                            @error('plant_process')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">Plant Activity</label>
                                    <input type="text"
                                        class="form-control @error('plant_activity') is-invalid @enderror"
                                        name="plant_activity" value="{{ old('plant_activity') }}"
                                        placeholder="Insert Plant Activity">

                                    <!-- error message untuk title -->
                                    @error('plant_activity')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mb-3">WR_NO</label>
                                            <input type="text" style="text-transform:uppercase"
                                                class="form-control @error('wr_no') is-invalid @enderror" name="wr_no"
                                                value="{{ old('wr_no') }}" placeholder="Insert WR_NO">
                                            <!-- error message untuk title -->
                                            @error('wr_no')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mb-3">WR_ITEM</label>
                                            <input type="text" onkeypress="return /[0-9]/i.test(event.key)"
                                                class="form-control @error('wr_item') is-invalid @enderror"
                                                name="wr_item"
                                                value="{{ str_pad(old('wr_item', '0'), 4, '0', STR_PAD_LEFT) }}" />

                                            <!-- error message untuk title -->
                                            @error('wr_item')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label class="font-weight-bold mb-3">QTY_REQ</label>
                                            <input type="number"
                                                class="form-control @error('qty_req') is-invalid @enderror"
                                                name="qty_req" value="{{ old('qty_req') }}"
                                                placeholder="Insert QTY_REQ">
                                            <!-- error message untuk title -->
                                            @error('qty_req')
                                                <div class="alert alert-danger mt-2">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="font-weight-bold mb-3">Stock Code</label>
                                    <select class="form-select @error('stock_id') is-invalid @enderror" name="stock_id">
                                        <option value="" disabled selected hidden>--- Select Stock Code ---</option>
                                        @foreach($stocks as $stock)
                                            <option value="{{ $stock->id }}" {{ old('stock_id') == $stock->id ? 'selected' : '' }}>
                                                {{ $stock->stock_code }} - {{ $stock->description }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('stock_id')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary me-3">Add</button>
                                <button type="reset" class="btn btn-md btn-warning">Reset</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection
