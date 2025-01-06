<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wr;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Exports\WrExport;
use Maatwebsite\Excel\Facades\Excel;

class WrController extends Controller
{
    public function index(): View
    {
        $wr = wr::latest()->paginate(10);

        return view('adminDashboard', compact('wr'));
    }
    public function create(): View
    {
        return view('create');
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            // Validasi form
            $request->validate([
                'dstrc_ori'         => 'required',
                'creation_date'     => 'required',
                'authsd_date'       => 'required',
                'wo_desc'           => 'required',
                'acuan_plan_service' => 'required',
                'componen_desc'     => 'required',
                'egi'               => 'required',
                'egi_eng'           => 'required',
                'equip_no'          => 'required',
                'plant_process'     => 'required',
                'plant_activity'    => 'required',
                'wr_no'             => 'required',
                'wr_item'           => 'required'
            ]);

            // Simpan data ke dalam database
            wr::create([
                'dstrc_ori'         => $request->dstrc_ori,
                'creation_date'     => $request->creation_date,
                'authsd_date'       => $request->authsd_date,
                'wo_desc'           => $request->wo_desc,
                'acuan_plan_service' => $request->acuan_plan_service,
                'componen_desc'     => $request->componen_desc,
                'egi'               => $request->egi,
                'egi_eng'           => $request->egi_eng,
                'equip_no'          => $request->equip_no,
                'plant_process'     => $request->plant_process,
                'plant_activity'    => $request->plant_activity,
                'wr_no'             => $request->wr_no,
                'wr_item'           => $request->wr_item,
                'qty_req'           => $request->qty_req
            ]);

            // Redirect dengan pesan sukses
            return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Ditambahkan!']);
        } catch (\Exception $e) {
            // Tampilkan error message
            dd($e->getMessage());
        }
    }

    public function show(string $id): View
    {
        //get product by ID
        $wr = wr::findOrFail($id);

        //render view with product
        return view('show', compact('wr'));
    }

    public function edit(string $id): View
    {
        //get product by ID
        $wr = wr::findOrFail($id);

        //render view with product
        return view('edit', compact('wr'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'dstrc_ori'         => 'required',
            'creation_date'         => 'required',
            'authsd_date'         => 'required',
            'wo_desc'         => 'required',
            'acuan_plan_service'         => 'required',
            'componen_desc'         => 'required',
            'egi'         => 'required',
            'egi_eng'         => 'required',
            'equip_no'         => 'required',
            'plant_process'         => 'required',
            'plant_activity'         => 'required',
            'wr_no'         => 'required',
            'wr_item'         => 'required'
        ]);

        //get product by ID
        $wr = wr::findOrFail($id);

        //update product without image
        $wr->update([
            'dstrc_ori'         => $request->dstrc_ori,
            'creation_date'         => $request->creation_date,
            'authsd_date'         => $request->authsd_date,
            'wo_desc'         => $request->wo_desc,
            'acuan_plan_service'         => $request->acuan_plan_service,
            'componen_desc'         => $request->componen_desc,
            'egi'         => $request->egi,
            'egi_eng'         => $request->egi_eng,
            'equip_no'         => $request->equip_no,
            'plant_process'         => $request->plant_process,
            'plant_activity'         => $request->plant_activity,
            'wr_no'         => $request->wr_no,
            'wr_item'         => $request->wr_item,
            'qty_req'         => $request->qty_req
        ]);

        //redirect to index
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        // Get product by ID
        $wr = wr::findOrFail($id);

        // Delete product
        $wr->delete();

        // Redirect to the dashboard route
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function export()
    {
        return Excel::download(new WrExport, 'Data WR.xlsx');
    }
}
