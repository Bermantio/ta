<?php

namespace App\Http\Controllers;

use App\Models\Dataprogram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataprogramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataprograms = Dataprogram::latest()->paginate(10);
        return view('dataprogram.index', compact('dataprograms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataprogram.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $dataprograms = Dataprogram::latest()->where('name_program', 'like', '%'.$search.'%')->paginate(10);
        return view('dataprogram.index',['dataprograms' => $dataprograms]);
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
            'kode_program'      => 'required',
            'name_program'      => 'required',
            'jenis_program'      => 'required',
            'tanggal_program'   => 'required',
            'deskripsi'         => 'required',
        ]);

        $dataprogram = dataprogram::create([
            'kode_program'        => $request->kode_program,
            'name_program'        => $request->name_program,
            'jenis_program'       => $request->jenis_program,
            'tanggal_program'     => $request->tanggal_program,
            'deskripsi'           => $request->deskripsi,
        ]);

        if($dataprogram){
            //redirect dengan pesan sukses
            return redirect()->route('dataprogram.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('dataprogram.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataprogram  $dataprogram
     * @return \Illuminate\Http\Response
     */
    public function show(Dataprogram $dataprogram)
    {
        return view('dataprogram.show',compact('dataprogram'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataprogram  $dataprogram
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataprogram $dataprogram)
    {
        return view('dataprogram.edit', compact('dataprogram'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataprogram  $dataprogram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataprogram $dataprogram)
    {
        $this->validate($request, [
            'kode_program'      => 'required',
            'name_program'      => 'required',
            'jenis_program'     => 'required',
            'tanggal_program'   => 'required',
            'deskripsi'         => 'required',
        ]);

        $dataprogram = Dataprogram::findOrFail($dataprogram->id);

        $dataprogram->update([
            'kode_program'        => $request->kode_program,
            'name_program'        => $request->name_program,
            'jenis_program'       => $request->jenis_program,
            'tanggal_program'     => $request->tanggal_program,
            'deskripsi'           => $request->deskripsi,
        ]);

        if($dataprogram){
            //redirect dengan pesan sukses
            return redirect()->route('dataprogram.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('dataprogram.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataprogram  $dataprogram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataprogram $dataprogram)
    {
        $dataprogram = Dataprogram::findOrFail($dataprogram->id);
        $dataprogram->delete();

        if($dataprogram){
            //redirect dengan pesan sukses
            return redirect()->route('dataprogram.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('dataprogram.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
