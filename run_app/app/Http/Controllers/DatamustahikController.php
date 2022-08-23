<?php

namespace App\Http\Controllers;

use App\Models\Datamustahik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatamustahikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamustahiks = Datamustahik::latest()->paginate(3);
        return view('datamustahik.index', compact('datamustahiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datamustahik.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datamustahiks = Datamustahik::latest()->where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('datamustahik.index',['datamustahiks' => $datamustahiks]);
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
            'kode'              => 'required',
            'name'              => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'profesi'           => 'required',
            'keterangan'        => 'required',
        ]);

        $datamustahik = Datamustahik::create([
            'kode'          => $request->kode,
            'name'          => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'profesi'       => $request->profesi,
            'keterangan'    => $request->keterangan,
        ]);

        if($datamustahik){
            //redirect dengan pesan sukses
            return redirect()->route('datamustahik.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datamustahik.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datamustahik  $datamustahik
     * @return \Illuminate\Http\Response
     */
    public function show(Datamustahik $datamustahik)
    {
        return view('datamustahik.show',compact('datamustahik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datamustahik  $datamustahik
     * @return \Illuminate\Http\Response
     */
    public function edit(Datamustahik $datamustahik)
    {
        return view('datamustahik.edit', compact('datamustahik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datamustahik  $datamustahik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datamustahik $datamustahik)
    {
        $this->validate($request, [
            'kode'              => 'required',
            'name'              => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'profesi'           => 'required',
            'keterangan'        => 'required',
        ]);

        $datamustahik = Datamustahik::findOrFail($datamustahik->id);

        $datamustahik->update([
            'kode'          => $request->kode,
            'name'          => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat'        => $request->alamat,
            'profesi'       => $request->profesi,
            'keterangan'    => $request->keterangan,
        ]);

        if($datamustahik){
            //redirect dengan pesan sukses
            return redirect()->route('datamustahik.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datamustahik.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datamustahik  $datamustahik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datamustahik $datamustahik)
    {
        $datamustahik = Datamustahik::findOrFail($datamustahik->id);
        $datamustahik->delete();

        if($datamustahik){
            //redirect dengan pesan sukses
            return redirect()->route('datamustahik.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datamustahik.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
