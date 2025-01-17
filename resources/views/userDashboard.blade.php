@extends('layouts.master')


@section('title', 'User Dashboard')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h1>Welcome {{ Auth::user()->name }}!</h1>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
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
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="23">
                                        <div class="alert alert-danger text-center">
                                            Data Barang belum tersedia.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
