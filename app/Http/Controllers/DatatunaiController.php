<?php

namespace App\Http\Controllers;

use App\Models\Datatunai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatatunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatunais = Datatunai::latest()->paginate(10);
        return view('datatunai.index', compact('datatunais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datatunai.create');
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

        $datatunai = datatunai::create([
            'kode_transaksi'        => $request->kode_transaksi,
            'kode_muzakki'          => $request->kode_muzakki,
            'name_muzakki'          => $request->name_muzakki,
            'tanggal_transaksi'     => $request->tanggal_transaksi,
            'jumlah_transaksi'      => $request->jumlah_transaksi,
            'status'                => $request->status,
        ]);

        if($datatunai){
            //redirect dengan pesan sukses
            return redirect()->route('datatunai.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datatunai.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datatunai  $datatunai
     * @return \Illuminate\Http\Response
     */
    public function show(Datatunai $datatunai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datatunai  $datatunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Datatunai $datatunai)
    {
        return view('datatunai.edit', compact('datatunai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datatunai  $datatunai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datatunai $datatunai)
    {
        $this->validate($request, [
            'kode_transaksi'      => 'required',
            'kode_muzakki'        => 'required',
            'name_muzakki'        => 'required',
            'tanggal_transaksi'   => 'required',
            'jumlah_transaksi'    => 'required',
            'status'              => 'required',
        ]);

        $datatunai = Datatunai::findOrFail($datatunai->id);

        $datatunai->update([
            'kode_transaksi'        => $request->kode_transaksi,
            'kode_muzakki'          => $request->kode_muzakki,
            'name_muzakki'          => $request->name_muzakki,
            'tanggal_transaksi'     => $request->tanggal_transaksi,
            'jumlah_transaksi'      => $request->jumlah_transaksi,
            'status'                => $request->status,
        ]);

        if($datatunai){
            //redirect dengan pesan sukses
            return redirect()->route('datatunai.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datatunai.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datatunai  $datatunai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datatunai $datatunai)
    {
        $datatunai = Datatunai::findOrFail($datatunai->id);
        $datatunai->delete();

        if($datatunai){
            //redirect dengan pesan sukses
            return redirect()->route('datatunai.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datatunai.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
