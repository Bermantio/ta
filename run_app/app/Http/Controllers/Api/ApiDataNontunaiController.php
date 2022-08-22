<?php

namespace App\Http\Controllers\Api;

use App\Models\DataNontunai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DataNontunaiResource;
use Illuminate\Support\Facades\Validator;

class ApiDataNontunaiController extends Controller
{   
    public function index(){
        $data_nontunai = Datanontunai::latest()->paginate(5);

        return new DataNontunaiResource(true, 'List Data', $data_nontunai);
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
        $validator = Validator::make($request->all(), [
            'tanggal_transaksi'  =>'required',
            'name_zakki'        =>'required',
            'alamat'            =>'required',
            'notelepon'            =>'required',
            'profesi'           =>'required',
            'name_program'      =>'required',
            'keterangan'        =>'required',
            'berupa'            =>'required',
            'jumlah_transaksi'  =>'required',
            'image'             =>'required|image|mimes:png,jpg,jpeg',
            'status'            =>'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/nontunais', $image->hashName());
        
        $data_nontunai = Datanontunai::create([
            'tanggal_transaksi'      => $request->tanggal_transaksi,
            'kode_zakki'            => $request->kode_zakki,
            'name_zakki'            => $request->name_zakki,
            'alamat'                => $request->alamat,
            'notelepon'                => $request->notelepon,
            'profesi'               => $request->profesi,
            'name_program'          => $request->name_program,
            'keterangan'            => $request->keterangan,
            'berupa'                => $request->berupa,
            'jumlah_transaksi'      => $request->jumlah_transaksi,
            'image'                 => $image->hashName(),
            'status'                => $request->status,
        ]);
        return new DataNontunaiResource(true, 'List Data', $data_nontunai);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datanontunai  $datanontunai
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        return new DataNontunaiResource(true, 'Data Telah Ditemukan', $request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datanontunai  $datanontunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Datanontunai $datanontunai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datanontunai  $datanontunai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datanontunai $datanontunai, $id)
    {
        $validasi=$request->validate([
            'status'=>'required',
        ]);

        $response = Datanontunai::find($id);
        $response->update($validasi);
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
        $datanontunai = datanontunai::update([
            'status'                => $request->status,
        ]);
    }

    public function destroy($id)
    {
        $datanontunai = Datanontunai::find($id);
        $datanontunai->delete();
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
    }
}
