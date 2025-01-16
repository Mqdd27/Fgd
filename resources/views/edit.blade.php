@extends('layouts.master')


{{-- @section('title', 'Admin Dashboard') --}}
@section('title', 'Admin Dashboard')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Edit WO
            </div>
            <div class="card-body">
                <form action="{{ route('wr.update', $wr->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="dstrc_ori" class="form-label">Dstrc Ori</label>
                        <input type="text" name="dstrc_ori" id="dstrc_ori" class="form-control"
                            value="{{ old('dstrc_ori', $wr->dstrc_ori) }}" required>
                        @error('dstrc_ori')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="creation_date" class="form-label">Creation Date</label>
                        <input type="date" name="creation_date" id="creation_date" class="form-control"
                            value="{{ old('creation_date', $wr->creation_date) }}" required>
                        @error('creation_date')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="authsd_date" class="form-label">Authsd Date</label>
                        <input type="date" name="authsd_date" id="authsd_date" class="form-control"
                            value="{{ old('authsd_date', $wr->authsd_date) }}" required>
                        @error('authsd_date')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="wo_desc" class="form-label">WO Description</label>
                        <input type="text" name="wo_desc" id="wo_desc" class="form-control"
                            value="{{ old('wo_desc', $wr->wo_desc) }}" required>
                        @error('wo_desc')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="acuan_plan_service" class="form-label">Acuan Plan Service</label>
                        <input type="date" name="acuan_plan_service" id="acuan_plan_service" class="form-control"
                            value="{{ old('acuan_plan_service', $wr->acuan_plan_service) }}" required>
                        @error('acuan_plan_service')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="componen_desc" class="form-label">Componen Desc</label>
                        <input type="text" name="componen_desc" id="componen_desc" class="form-control"
                            value="{{ old('componen_desc', $wr->componen_desc) }}" required>
                        @error('componen_desc')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="egi" class="form-label">EGI</label>
                        <input type="text" name="egi" id="egi" class="form-control"
                            value="{{ old('egi', $wr->egi) }}" required>
                        @error('egi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="egi_eng" class="form-label">EGI ENG</label>
                        <input type="text" name="egi_eng" id="egi_eng" class="form-control"
                            value="{{ old('egi_eng', $wr->egi_eng) }}" required>
                        @error('egi_eng')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="equip_no" class="form-label">EQUIP_NO</label>
                        <input type="text" name="equip_no" id="equip_no" class="form-control"
                            value="{{ old('equip_no', $wr->equip_no) }}" required>
                        @error('equip_no')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="plant_process" class="form-label">Plant Process</label>
                        <select name="plant_process" id="plant_process" class="form-select" required>
                            @if (old('plant_process', $wr->plant_process) == 'SCHEDULED')
                                <option value="SCHEDULED"
                                    {{ old('plant_process', $wr->plant_process) === 'SCHEDULED' ? 'selected' : '' }}>
                                    SCHEDULED
                                </option>

                                <option value="NON_PLANT"
                                    {{ old('plant_process', $wr->plant_process) === 'NON_PLANT' ? 'selected' : '' }}>
                                    NON PLANT
                                </option>
                            @else
                                <option value="NON_PLANT"
                                    {{ old('plant_process', $wr->plant_process) === 'NON_PLANT' ? 'selected' : '' }}>
                                    NON PLANT
                                </option>
                                <option value="SCHEDULED"
                                    {{ old('plant_process', $wr->plant_process) === 'SCHEDULED' ? 'selected' : '' }}>
                                    SCHEDULED
                                </option>
                            @endif
                            @error('plant_process')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="plant_activity" class="form-label">Plant Activity</label>
                        <input type="text" name="plant_activity" id="plant_activity" class="form-control"
                            value="{{ old('plant_activity', $wr->plant_activity) }}" required>
                        @error('plant_activity')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="wr_no" class="form-label">WR_NO</label>
                        <input type="text" name="wr_no" id="wr_no" class="form-control"
                            value="{{ old('wr_no', $wr->wr_no) }}" required>
                        @error('wr_no')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="wr_item" class="form-label">WR_ITEM</label>
                        <input type="text" name="wr_item" id="wr_item" class="form-control"
                            value="{{ old('wr_item', $wr->wr_item) }}" required>
                        @error('wr_item')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="qty_req" class="form-label">QTY_REQ</label>
                        <input type="number" name="qty_req" id="qty_req" class="form-control"
                            value="{{ old('qty_req', $wr->qty_req) }}" required>
                        @error('qty_req')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="stock_code" class="form-label">Stock Code</label>
                        <select name="stock_code" id="stock_code" class="form-select" required>
                            <option value="" disabled>-- Select Stock Code --</option>
                            @foreach ($stockCode as $stock)
                                <option value="{{ $stock->stock_code }}"
                                    {{ old('stock_code', $wr->stock_code) == $stock->stock_code ? 'selected' : '' }}>
                                    {{ $stock->stock_code }} - {{ $stock->item_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('stock_code')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price_code" class="form-label">PRICE_CODE</label>
                        <input type="text" name="price_code" id="price_code" class="form-control"
                            value="{{ old('price_code', $wr->price_code) }}">
                        @error('price_code')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="item_name" class="form-label">ITEM_NAME</label>
                        <input type="text" name="item_name" id="item_name" class="form-control"
                            value="{{ old('item_name', $wr->item_name) }}" required>
                        @error('item_name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">CLASS</label>
                        <input type="text" name="class" id="class" class="form-control"
                            value="{{ old('class', $wr->class) }}" required>
                        @error('class')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="current_class" class="form-label">Current Class</label>
                        <input type="text" name="current_class" id="current_class" class="form-control"
                            value="{{ old('current_class', $wr->current_class) }}" required>
                        @error('current_class')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="mnemonic_current" class="form-label">Mnemonic Current</label>
                        <input type="text" name="mnemonic_current" id="mnemonic_current" class="form-control"
                            value="{{ old('mnemonic_current', $wr->mnemonic_current) }}" required>
                        @error('mnemonic_current')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pn_current" class="form-label">PN Current</label>
                        <input type="text" name="pn_current" id="pn_current" class="form-control"
                            value="{{ old('pn_current', $wr->pn_current) }}" required>
                        @error('pn_current')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pn_global" class="form-label">PN Global</label>
                        <input type="text" name="pn_global" id="pn_global" class="form-control"
                            value="{{ old('pn_global', $wr->pn_global) }}" required>
                        @error('pn_global')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="wh" class="form-label">WH</label>
                        <select name="wh" id="wh" class="form-select" required>
                            <option value="OTS1" {{ old('wh', $wr->wh) === 'OTS1' ? 'selected' : '' }}>OTS1</option>
                            <option value="OTS2" {{ old('wh', $wr->wh) === 'OTS2' ? 'selected' : '' }}>OTS2</option>
                            <option value="PSVH" {{ old('wh', $wr->wh) === 'PSVH' ? 'selected' : '' }}>PSVH</option>
                            <option value="UTVH" {{ old('wh', $wr->wh) === 'UTVH' ? 'selected' : '' }}>UTVH</option>
                            <option value="SPUT" {{ old('wh', $wr->wh) === 'SPUT' ? 'selected' : '' }}>SPUT</option>
                        </select>
                        @error('wh')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="uoi" class="form-label">UOI</label>
                        <input type="text" name="uoi" id="uoi" style="text-transform: uppercase"
                            class="form-control" value="{{ old('uoi', $wr->uoi) }}" required>
                        @error('uoi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <input type="text" name="notes" id="notes" class="form-control"
                            value="{{ old('notes', $wr->notes) }}">
                        @error('notes')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="complete" {{ old('status', $wr->status) === 'complete' ? 'selected' : '' }}>
                                Complete</option>
                            <option value="continue" {{ old('wh', $wr->wh) === 'continue' ? 'selected' : '' }}>Continue
                            </option>
                        </select>
                        @error('wh')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection
