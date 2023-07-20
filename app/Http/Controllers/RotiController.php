<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roti;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Roti::all();
        return view('roti.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('roti.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Guru::create([
            'roti_kode' => $request->roti_kode,
            'roti_nama' => $request->roti_nama,
            'roti_jk' => $request->roti_jk,
            'roti_tamatan' => $request->roti_tamatan
        ]);
        return redirect('guru');
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
        $row = Roti::find($id);
        return view('roti.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Roti::findOrFail($id);
        $row->update([
            'roti_kode' => $request->roti_kode,
            'roti_nama' => $request->roti_nama,
            'roti_jk' => $request->roti_jk,
            'roti_jenis' => $request->roti_jenis
        ]);
        return redirect('roti');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Roti::findOrFail($id);
        $row->delete();
        return redirect('roti');
    }
}
