<?php

namespace App\Http\Controllers;

use App\Models\Datalazismu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatalazismuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalazismus = Datalazismu::latest()->paginate(10);
        return view('datalazismu.index', compact('datalazismus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datalazismu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_kantor'   => 'required',
            'name_kantor'   => 'required',
            'name_pimpinan' => 'required',
            'alamat'        => 'required',
            'notelp'        => 'required',
            'email'         => 'required',
        ]);

        $datalazismu = Datalazismu::create([
            'kode_kantor'   => $request->kode_kantor,
            'name_kantor'   => $request->name_kantor,
            'name_pimpinan' => $request->name_pimpinan,
            'alamat'        => $request->alamat,
            'notelp'        => $request->notelp,
            'email'         => $request->email,
        ]);

        if($datalazismu){
            //redirect dengan pesan sukses
            return redirect()->route('datalazismu.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datalazismu.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datalazismu  $datalazismu
     * @return \Illuminate\Http\Response
     */
    public function show(Datalazismu $datalazismu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datalazismu  $datalazismu
     * @return \Illuminate\Http\Response
     */
    public function edit(Datalazismu $datalazismu)
    {
        return view('datalazismu.edit', compact('datalazismu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datalazismu  $datalazismu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datalazismu $datalazismu)
    {
        $this->validate($request, [
            'kode_kantor'   => 'required',
            'name_kantor'   => 'required',
            'name_pimpinan' => 'required',
            'alamat'        => 'required',
            'notelp'        => 'required',
            'email'         => 'required',
        ]);

        $datalazismu = Datalazismu::findOrFail($datalazismu->id);

        $datalazismu->update([
            'kode_kantor'   => $request->kode_kantor,
            'name_kantor'   => $request->name_kantor,
            'name_pimpinan' => $request->name_pimpinan,
            'alamat'        => $request->alamat,
            'notelp'        => $request->notelp,
            'email'         => $request->email,
        ]);

        if($datalazismu){
            //redirect dengan pesan sukses
            return redirect()->route('datalazismu.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datalazismu.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datalazismu  $datalazismu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datalazismu $datalazismu)
    {
        $datalazismu = Datalazismu::findOrFail($datalazismu->id);
        $datalazismu->delete();

        if($datalazismu){
            //redirect dengan pesan sukses
            return redirect()->route('datalazismu.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datalazismu.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
