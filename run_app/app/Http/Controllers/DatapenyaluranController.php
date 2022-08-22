<?php

namespace App\Http\Controllers;

use App\Models\Datapenyaluran;
use App\Models\Dataprogram;
use App\Models\Datamustahik;
use DB;
use Illuminate\Http\Request;

class DatapenyaluranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapenyalurans = Datapenyaluran::latest()->paginate(2);
        return view('datapenyaluran.index', compact('datapenyalurans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $namaprog = Dataprogram::all();
        $namahik = Datamustahik::all();
        return view('datapenyaluran.create', compact('namaprog', 'namahik'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datapenyalurans = Datapenyaluran::latest()->where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('datapenyaluran.index',['datapenyalurans' => $datapenyalurans]);
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
            'tanggal_penyaluran'  => 'required',
            'name_program'        => 'required',
            'name'                => 'required',
            //'jenis_kelamin'       => 'required',
            //'alamat'              => 'required',
            //'profesi'             => 'required',
            'jumlah_donasi'       => 'required',
        ]);

        $datapenyaluran = datapenyaluran::create([
            'kode_transaksi'        => $request->kode_transaksi,
            'tanggal_penyaluran'    => $request->tanggal_penyaluran,
            'name_program'          => $request->name_program,
            'name'                  => $request->name,
            //'jenis_kelamin'         => $request->jenis_kelamin,
            //'alamat'                => $request->alamat,
            //'profesi'               => $request->profesi,
            'jumlah_donasi'         => $request->jumlah_donasi,
        ]);

        if($datapenyaluran){
            //redirect dengan pesan sukses
            return redirect()->route('datapenyaluran.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datapenyaluran.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datapenyaluran  $datapenyaluran
     * @return \Illuminate\Http\Response
     */
    public function show(Datapenyaluran $datapenyaluran)
    {
        return view('datapenyaluran.show',compact('datapenyaluran'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datapenyaluran  $datapenyaluran
     * @return \Illuminate\Http\Response
     */
    public function edit(Datapenyaluran $datapenyaluran)
    {
        $namaprog = Dataprogram::all();
        $namahik = Datamustahik::all();
        return view('datapenyaluran.edit', compact('datapenyaluran', 'namaprog', 'namahik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datapenyaluran  $datapenyaluran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datapenyaluran $datapenyaluran)
    {
        $this->validate($request, [
            'kode_transaksi'      => 'required',
            'tanggal_penyaluran'  => 'required',
            'name_program'        => 'required',
            'name'                => 'required',
            //'jenis_kelamin'       => 'required',
            //'alamat'              => 'required',
           // 'profesi'             => 'required',
            'jumlah_donasi'       => 'required',
        ]);

        $datapenyaluran = datapenyaluran::findOrFail($datapenyaluran->id);

        $datapenyaluran->update([
            'kode_transaksi'        => $request->kode_transaksi,
            'tanggal_penyaluran'    => $request->tanggal_penyaluran,
            'name_program'          => $request->name_program,
            'name'                  => $request->name,
            //'jenis_kelamin'         => $request->jenis_kelamin,
            //'alamat'                => $request->alamat,
            //'profesi'               => $request->profesi,
            'jumlah_donasi'         => $request->jumlah_donasi,
        ]);

        if($datapenyaluran){
            //redirect dengan pesan sukses
            return redirect()->route('datapenyaluran.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datapenyaluran.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datapenyaluran  $datapenyaluran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datapenyaluran $datapenyaluran)
    {
        $datapenyaluran = Datapenyaluran::findOrFail($datapenyaluran->id);
        $datapenyaluran->delete();

        if($datapenyaluran){
            //redirect dengan pesan sukses
            return redirect()->route('datapenyaluran.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datapenyaluran.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
