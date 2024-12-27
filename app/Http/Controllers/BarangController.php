<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BarangController extends Controller
{
    public function index(): View
    {
        $barangs = Barang::latest()->paginate(10);

        return view('adminDashboard', compact('barangs'));
    }

        /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('create');
    }

        /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'barang'         => 'required',
            'jumlah'         => 'required|numeric'
        ]);

        //create product
        Barang::create([
            'barang'         => $request->barang,
            'jumlah'         => $request->jumlah
        ]);

        //redirect to index
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $barangs = Barang::findOrFail($id);

        //render view with product
        return view('show', compact('barangs'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get product by ID
        $barangs = Barang::findOrFail($id);

        //render view with product
        return view('edit', compact('barangs'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'barang'         => 'required|min:5',
            'jumlah'         => 'required|numeric'
        ]);

        //get product by ID
        $barangs = Barang::findOrFail($id);

            //update product without image
            $barangs->update([
                'barang'         => $request->barang,
                'jumlah'         => $request->jumlah
            ]);

        //redirect to index
        return redirect()->route('barangs.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

        /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Get barang by ID
        $barangs = Barang::findOrFail($id);

        // Delete barang
        $barangs->delete();

        // Redirect to the dashboard route
        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
