<?php

namespace App\Http\Controllers;

use App\Models\wr;
use App\Exports\WrExport;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;

class WrController extends Controller
{
    public function index(): View
    {
        $wr = Wr::latest()->paginate(10);
        return view('adminDashboard', compact('wr'));
    }

    public function create()
    {
        $wr = Wr::all();
        return view('create', compact('wr'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'dstrc_ori' => 'required',
            'creation_date' => 'required',
            'authsd_date' => 'required',
            'wo_desc' => 'required',
            'acuan_plan_service' => 'required',
            'componen_desc' => 'required',
            'egi' => 'required',
            'egi_eng' => 'required',
            'equip_no' => 'required',
            'plant_process' => 'required',
            'plant_activity' => 'required',
            'wr_no' => 'required',
            'wr_item' => 'required',
            'qty_req' => 'required',
            'stock_code' => 'required',
            'price_code' => 'required',
            'item_name' => 'required',
            'class' => 'required',
            'current_class' => 'required',
            'mnemonic_current' => 'required',
            'pn_current' => 'required',
            'pn_global' => 'required',
            'wh' => 'required',
            'uoi' => 'required'
        ]);

        // Wr::create($request->all());

        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function show(string $id): View
    {
        $wr = Wr::findOrFail($id);
        return view('show', compact('wr'));
    }

    public function edit(string $id): View
    {
        $wr = Wr::findOrFail($id);
        return view('edit', compact('wr'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'dstrc_ori' => 'required',
            'creation_date' => 'required',
            'authsd_date' => 'required',
            'wo_desc' => 'required',
            'acuan_plan_service' => 'required',
            'componen_desc' => 'required',
            'egi' => 'required',
            'egi_eng' => 'required',
            'equip_no' => 'required',
            'plant_process' => 'required',
            'plant_activity' => 'required',
            'wr_no' => 'required',
            'wr_item' => 'required',
            'qty_req' => 'required',
            'stock_code' => 'required',
            'price_code' => 'required',
            'item_name' => 'required',
            'class' => 'required',
            'current_class' => 'required',
            'mnemonic_current' => 'required',
            'pn_current' => 'required',
            'pn_global' => 'required',
            'wh' => 'required',
            'uoi' => 'required'
            // 'notes' => 'required',
        ]);

        $wr = Wr::findOrFail($id);
        $wr->update($request->all());

        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $wr = Wr::findOrFail($id);
        $wr->delete();

        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function export()
    {
        return Excel::download(new WrExport, 'Data WR.xlsx');
    }
}
