<?php

namespace App\Http\Controllers;

use App\Models\Datalaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatalaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalaporans = Datalaporan::latest()->paginate(10);
        return view('datalaporan.index', compact('datalaporans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datalaporan.create');
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
            'name_kantor'       => 'required',
            'jenis_program'     => 'required',
            'jenis_transaksi'   => 'required',
            'jumlah_transaksi'  => 'required',
            'status'            => 'required',
            'email'             => 'required',
        ]);

        $datalaporan = Datalaporan::create([
            'name_kantor'       => $request->name_kantor,
            'jenis_program'     => $request->jenis_program,
            'jenis_transaksi'   => $request->jenis_transaksi,
            'jumlah_transaksi'  => $request->jumlah_transaksi,
            'status'            => $request->status,
            'email'             => $request->email,
        ]);

        if($datalaporan){
            //redirect dengan pesan sukses
            return redirect()->route('datalaporan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datalaporan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datalaporan  $datalaporan
     * @return \Illuminate\Http\Response
     */
    public function show(Datalaporan $datalaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datalaporan  $datalaporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Datalaporan $datalaporan)
    {
        return view('datalaporan.edit', compact('datalaporan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datalaporan  $datalaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datalaporan $datalaporan)
    {
        $this->validate($request, [
            'name_kantor'       => 'required',
            'jenis_program'     => 'required',
            'jenis_transaksi'   => 'required',
            'jumlah_transaksi'  => 'required',
            'status'            => 'required',
            'email'             => 'required',
        ]);

        $datalaporan = Datalaporan::findOrFail($datalaporan->id);

        $datalaporan->update([
            'name_kantor'       => $request->name_kantor,
            'jenis_program'     => $request->jenis_program,
            'jenis_transaksi'   => $request->jenis_transaksi,
            'jumlah_transaksi'  => $request->jumlah_transaksi,
            'status'            => $request->status,
            'email'             => $request->email,
        ]);

        if($datalaporan){
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
     * @param  \App\Models\Datalaporan  $datalaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datalaporan $datalaporan)
    {
        $datalaporan = Datalaporan::findOrFail($datalaporan->id);
        $datalaporan->delete();

        if($datalaporan){
            //redirect dengan pesan sukses
            return redirect()->route('datalaporan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datalaporan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
