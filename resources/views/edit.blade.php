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
                <form action="">

                    <div class="form-group">
                        <label class=" form-control-label">District Origin</label>
                        <input type="text" name="nama" class="form-control mt-2" placeholder="Insert Disctrict Origin"
                            required>
                    </div>
                    <div class="form-group mt-2">
                        <label class=" form-control-label">Creation Date</label>
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control mt-2" disabled>
                    </div>
                    <div class="form-group mt-2">
                        <label class=" form-control-label">Auth Date</label>
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control mt-2">
                    </div>
                    <div class="form-group mt-2">
                        <label class=" form-control-label">WO Desc</label>
                        <input type="text" name="nama" class="form-control mt-2" placeholder="Insert WO Desc"
                            required>
                    </div>
                    <div class="form-group mt-2">
                        <label class=" form-control-label">Acuan Plan Service</label>
                        <input type="date" value="{{ date('Y-m-d') }}" class="form-control mt-2">
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-sm" name="bsimpan">
                    <i class="fa fa-dot-circle-o"></i> Submit
                </button>
                <button type="reset" class="btn btn-danger btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
            </div>
            </form>
        </div>
    </div>

@endsection
