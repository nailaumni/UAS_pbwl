<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mapel;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Cake::all();
        return view('Cake.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rowsBakery = Mapel::all();
        return view('cake.create' , compact('rowsBakery'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Kelas::create([
            'cake_id_bakery' => $request->cake_id_bakery,
            'cake_nama' => $request->cake_nama,
            'cake_jumlah' => $request->cake_jumlah
        ]);
        return redirect('cake');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $getbakery = Bakery::all();
        $row = Cake::find($id);
        $editbakery = Bakery::find($row->kelas_id_mapel);
        return view('cake.edit', compact('row','editmapel','getmapel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Cake::findOrFail($id);
        $row->update([
            'cake_id_bakery' => $request->cake_id_bakery,
            'cake_nama' => $request->cake_nama,
            'cake_jumlah' => $request->cake_jumlah
        ]);
        return redirect('cake');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Cake::findOrFail($id);
        $row->delete();
        return redirect('cake');
    }
}
