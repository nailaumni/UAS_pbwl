<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bakery;
use App\Models\Roti;


class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Bakery::all();
        return view('bakery.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rowsGuru = Bakery::all();
        return view('bakery.create', compact('rowsBakery'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Mapel::create([
            'bakery_id_roti' => $request->bakery_id_roti,
            'bakery_kode' => $request->bakery_kode,
            'bakery_nama' => $request->bakery_nama
        ]);
        return redirect('bakery');
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
        $getroti = Roti::all();
        $row = Bakery::find($id);
        $editguru = Guru::find($row->bakery_id_roti);
        return view('mapel.edit', compact('row','editguru','getguru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Bakery::findOrFail($id);
        $row->update([
            'bakery_id_roti' => $request->bakery_id_roti,
            'bakery_kode' => $request->bakery_kode,
            'bakery_nama' => $request->bakery_nama
        ]);
        return redirect('bakery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Bakery::findOrFail($id);
        $row->delete();
        return redirect('bakery');
    }
}
