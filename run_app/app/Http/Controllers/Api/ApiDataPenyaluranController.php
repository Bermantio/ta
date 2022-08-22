<?php

namespace App\Http\Controllers\Api;

use App\Models\DataPenyaluran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DataPenyaluranResource;
use Illuminate\Support\Facades\Validator;

class ApiDataPenyaluranController extends Controller
{   
    public function index(){
        $data_penyaluran = DataPenyaluran::latest()->paginate(5);

        return new DataPenyaluranResource(true, 'List Data', $data_penyaluran);
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
            'kode_transaksi'      => 'required',
            'tanggal_penyaluran'  => 'required',
            'name_program'        => 'required',
            'name'                => 'required',
            'jumlah_donasi'       => 'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        
        $data_penyaluran = Datapenyaluran::create([
            'kode_transaksi'        => $request->kode_transaksi,
            'tanggal_penyaluran'    => $request->tanggal_penyaluran,
            'name_program'          => $request->name_program,
            'name'                  => $request->name,
            'jumlah_donasi'         => $request->jumlah_donasi,
        ]);
        return new DataPenyaluranResource(true, 'List Data', $data_penyaluran);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datapenyaluran  $datapenyaluran
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, )
    {
        return new DataPenyaluranResource(true, 'Data Telah Ditemukan', $datapenyaluran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datapenyaluran  $datapenyaluran
     * @return \Illuminate\Http\Response
     */
    public function edit(Datapenyaluran $datapenyaluran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datapenyaluran  $datapenyaluran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datapenyaluran $datapenyaluran, $id)
    {
        $validasi=$request->validate([
            'kode_transaksi'      => 'required',
            'tanggal_penyaluran'  => 'required',
            'name_program'        => 'required',
            'name'                => 'required',
            'jumlah_donasi'       => 'required',
        ]);

        $response = Datapenyaluran::find($id);
        $response->update($validasi);
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
        $datapenyaluran = datapenyaluran::update([
            'kode_transaksi'        => $request->kode_transaksi,
            'tanggal_penyaluran'    => $request->tanggal_penyaluran,
            'name_program'          => $request->name_program,
            'name'                  => $request->name,
            'jumlah_donasi'         => $request->jumlah_donasi,
        ]);
    }

    public function destroy($id)
    {
        $datapenyaluran = Datapenyaluran::find($id);
        $datapenyaluran->delete();
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
    }
}
