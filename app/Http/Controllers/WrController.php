<?php

namespace App\Http\Controllers;

use App\Models\wr;
use App\Models\Stock;
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

    public function create(): View
    {
        $stocks = Stock::all(); // Mengambil semua data stock
        return view('create', compact('stocks'));
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
            'stock_id' => 'required|exists:stocks,id', // Validasi stock_id
        ]);
    
        // Menambahkan stock_id ke dalam data yang disimpan
        Wr::create($request->all());
    
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
        $stocks = Stock::all(); // Mengambil data stock untuk edit
        return view('edit', compact('wr', 'stocks'));
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
            'stock_id' => 'required|exists:stocks,id', // Validasi stock_id
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
