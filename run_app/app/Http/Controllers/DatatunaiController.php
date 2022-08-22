<?php

namespace App\Http\Controllers;

use App\Models\Datatunai;
use App\Models\Datamuzakki;
use App\Models\Dataprogram;
use DB;
use PDF;    
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
        $datatunai = Datatunai::latest()->paginate(10);
        return view('datatunai.index', compact('datatunai'));
    }

    public function downloadpdf(datatunai $datatunai)
    {
    	//$datatunai = Datatunai::all();
        $datatunai = Datatunai::findOrFail($datatunai->id);
    //	$pdf = PDF::loadview('datatunai.cetakpdf',['datatunai' => $datatunai]);
    	return view('datatunai.cetakpdf', compact('datatunai', 'datatunai'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datatunai = Datatunai::latest()->where('name_muz', 'like', '%'.$search.'%')->paginate(10);
        return view('datatunai.index',['datatunai' => $datatunai]);
    }

    //public function print()
    //{
    //    $niken = Datatunai::latest()->paginate(10);
    //    return view('datatunai.print', compact('datatunai'));
    //}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $niken = Datamuzakki::all();
        $program = Dataprogram::all();
        return view('datatunai.create', compact('niken', 'program'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Datatunai $datatunai)
    {
        $this->validate($request, [
            'kode_muz'            => 'required',
            'name_muz'            => 'required',
            'name_program'        => 'required',
            'tanggal_transaksi'   => 'required',
            'jumlah_transaksi'    => 'required',
            'status'              => 'required',
        ]);

        $datatunai = datatunai::create([
            //'kode_transaksi'        => $request->kode_transaksi = mt_rand(100, 999),
            'kode_muz'              => $request->kode_muz, 
            'name_muz'              => $request->name_muz,
            'name_program'          => $request->name_program,
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
        return view('datatunai.show', compact('datatunai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datatunai  $datatunai
     * @return \Illuminate\Http\Response
     */
    public function edit(Datatunai $datatunai)
    {
        $niken = Datamuzakki::all();
        $program = Dataprogram::all();
        return view('datatunai.edit', compact('niken', 'program', 'datatunai'));
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
                'kode_muz'            => 'required',
                'name_muz'            => 'required',
                'name_program'        => 'required',
                'tanggal_transaksi'   => 'required',
                'jumlah_transaksi'    => 'required',
                'status'              => 'required',
        ]);

        $datatunai = Datatunai::findOrFail($datatunai->id);

        $datatunai->update([
            //'kode_transaksi'        => $request->kode_transaksi = mt_rand(100, 999),
            'kode_muz'              => $request->kode_muz,
            'name_muz'              => $request->name_muz,
            'name_program'          => $request->name_program,
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
