<?php

namespace App\Http\Controllers;

use App\Models\Datanontunai;
use App\Models\Datamuzakki;
use DB;
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
        $nontunai = Datamuzakki::all();
        return view('datanontunai.create', compact('nontunai'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datanontunais = Datanontunai::latest()->where('name_zakki', 'like', '%'.$search.'%')->paginate(10);
        return view('datanontunai.index',['datanontunais' => $datanontunais]);
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
            //'kode_transaksi'      => 'required',
            'tanggal_transaksi'   => 'required',
            //'kode_zakki'          => 'required',
            'name_zakki'          => 'required',
            //'jenis_kelamin'       => 'required',
            'alamat'              => 'required',
            'notelepon'           => 'required',
            'profesi'             => 'required',
            'name_program'        => 'required',
            'keterangan'          => 'required',
            'berupa'              => 'required',
            'jumlah_transaksi'    => 'required',
            'image'               => 'required|image|mimes:png,jpg,jpeg',
            'status'              => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/datamuzakkis', $image->hashName());

        $datanontunai = datanontunai::create([
            //'kode_transaksi'        => $request->kode_transaksi = mt_rand(100, 999),
            'tanggal_transaksi'     => $request->tanggal_transaksi,
            //'kode_zakki'            => $request->kode_zakki,
            'name_zakki'            => $request->name_zakki,
            //'jenis_kelamin'         => $request->jenis_kelamin,
            'alamat'                => $request->alamat,
            'notelepon'             => $request->notelepon,
            'profesi'               => $request->profesi,
            'name_program'          => $request->name_program,
            'keterangan'            => $request->keterangan,
            'berupa'                => $request->berupa,
            'jumlah_transaksi'      => $request->jumlah_transaksi,
            'image'                 => $image->hashName(),
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
        return view('datanontunai.show', compact('datanontunai'));
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
            'status'              => 'required',
        ]);

        $datanontunai = Datanontunai::findOrFail($datanontunai->id);

        $datanontunai->update([
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
