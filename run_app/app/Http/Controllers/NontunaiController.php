<?php

namespace App\Http\Controllers;

use App\Models\Nontunai;
use Illuminate\Http\Request;

class NontunaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Nontunai::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'tanggaltransaksi'=>'required',
            'name_zakki'=>'required',
            'alamat'=>'required',
            'profesi'=>'required',
            'name_program'=>'required',
            'keterangan'=>'required',
            'berupa'=>'required',
            'jumlah_transaksi'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg',
            'status'=>'required',
        ]);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/nontunais', $image->hashName());

        $nontunai = nontunai::create([
            'tanggaltransaksi'     => $request->tanggaltransaksi,
            'kode_zakki'            => $request->kode_zakki,
            'name_zakki'            => $request->name_zakki,
            'alamat'                => $request->alamat,
            'profesi'               => $request->profesi,
            'name_program'          => $request->name_program,
            'keterangan'            => $request->keterangan,
            'berupa'                => $request->berupa,
            'jumlah_transaksi'      => $request->jumlah_transaksi,
            'image'                 => $image->hashName(),
            'status'                => $request->status,
        ]);
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nontunai  $nontunai
     * @return \Illuminate\Http\Response
     */
    public function show(Nontunai $nontunai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nontunai  $nontunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Nontunai $nontunai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nontunai  $nontunai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nontunai $nontunai, $id)
    {
        $validasi=$request->validate([
            'status'=>'required',
        ]);

        $response = Nontunai::find($id);
        $response->update($validasi);
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
        $nontunai = nontunai::create([
            'status'                => $request->status,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nontunai  $nontunai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nontunai = Nontunai::find($id);
        $nontunai->delete();
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
    }
}
