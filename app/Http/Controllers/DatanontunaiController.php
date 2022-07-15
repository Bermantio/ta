<?php

namespace App\Http\Controllers;

use App\Models\Datanontunai;
use Illuminate\Http\Request;

class DatanontunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datanontunais = Datanontunai::latest()->paginate(10);
        return view('datanontunai.index', compact('datanontunais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datanontunai.create');
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
            'kode_transaksi'      => 'required',
            'kode_muzakki'        => 'required',
            'name_muzakki'        => 'required',
            'tanggal_transaksi'   => 'required',
            'jumlah_transaksi'    => 'required',
            'status'              => 'required',
        ]);

        $datanontunai = datanontunai::create([
            'kode_transaksi'        => $request->kode_transaksi,
            'kode_muzakki'          => $request->kode_muzakki,
            'name_muzakki'          => $request->name_muzakki,
            'tanggal_transaksi'     => $request->tanggal_transaksi,
            'jumlah_transaksi'      => $request->jumlah_transaksi,
            'status'                => $request->status,
        ]);

        if($datanontunai){
            //redirect dengan pesan sukses
            return redirect()->route('datanontunai.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datanontunai.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datanontunai  $datanontunai
     * @return \Illuminate\Http\Response
     */
    public function show(Datanontunai $datanontunai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datanontunai  $datanontunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Datanontunai $datanontunai)
    {
        return view('datanontunai.edit', compact('datanontunai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datanontunai  $datanontunai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datanontunai $datanontunai)
    {
        $this->validate($request, [
            'kode_transaksi'      => 'required',
            'kode_muzakki'        => 'required',
            'name_muzakki'        => 'required',
            'tanggal_transaksi'   => 'required',
            'jumlah_transaksi'    => 'required',
            'status'              => 'required',
        ]);

        $datanontunai = Datanontunai::findOrFail($datanontunai->id);

        $datanontunai->update([
            'kode_transaksi'        => $request->kode_transaksi,
            'kode_muzakki'          => $request->kode_muzakki,
            'name_muzakki'          => $request->name_muzakki,
            'tanggal_transaksi'     => $request->tanggal_transaksi,
            'jumlah_transaksi'      => $request->jumlah_transaksi,
            'status'                => $request->status,
        ]);

        if($datanontunai){
            //redirect dengan pesan sukses
            return redirect()->route('datanontunai.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datanontunai.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datanontunai  $datanontunai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datanontunai $datanontunai)
    {
        $datanontunai = Datanontunai::findOrFail($datanontunai->id);
        $datanontunai->delete();

        if($datanontunai){
            //redirect dengan pesan sukses
            return redirect()->route('datanontunai.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datanontunai.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
