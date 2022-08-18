<?php

namespace App\Http\Controllers;

use App\Models\Datamuzakki;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatamuzakkiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamuzakkis = Datamuzakki::latest()->paginate(10);
        return view('datamuzakki.index', compact('datamuzakkis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puspan = User::all();
        return view('datamuzakki.create', compact('puspan'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datamuzakkis = Datamuzakki::latest()->where('name_muzakki', 'like', '%'.$search.'%')->paginate(10);
        return view('datamuzakki.index',['datamuzakkis' => $datamuzakkis]);
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
            //'image'             => 'required|image|mimes:png,jpg,jpeg',
            'kode_muzakki'      => 'required',
            //'name_user'         => 'required',
            'name_muzakki'      => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'profesi'           => 'required',
            //'tanggal_dibuat'    => 'required',
            //'keterangan'        => 'required',
        ]);

        //upload image
        /*$image = $request->file('image');
        $image->storeAs('public/datamuzakkis', $image->hashName());*/

        $datamuzakki = Datamuzakki::create([
            //'image'             => $image->hashName(),
            'kode_muzakki'      => $request->kode_muzakki,
            //'name_user'         => $request->name_user,
            'name_muzakki'      => $request->name_muzakki,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'alamat'            => $request->alamat,
            'profesi'           => $request->profesi,
            //'tanggal_dibuat'    => $request->tanggal_dibuat,
            //'keterangan'        => $request->keterangan,
        ]);

        if($datamuzakki){
            //redirect dengan pesan sukses
            return redirect()->route('datamuzakki.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datamuzakki.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datamuzakki  $datamuzakki
     * @return \Illuminate\Http\Response
     */
    public function show(Datamuzakki $datamuzakki)
    {
        return view('datamuzakki.show',compact('datamuzakki'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datamuzakki  $datamuzakki
     * @return \Illuminate\Http\Response
     */
    public function edit(Datamuzakki $datamuzakki)
    {
        $puspan = Datauser::all();
        return view('datamuzakki.edit', compact('datamuzakki', 'puspan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datamuzakki  $datamuzakki
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datamuzakki $datamuzakki)
    {
        $this->validate($request, [
            //'image'             => 'required|image|mimes:png,jpg,jpeg',
            'kode_muzakki'      => 'required',
            //'name_user'         => 'required',
            'name_muzakki'      => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'profesi'           => 'required',
            //'tanggal_dibuat'    => 'required',
            //'keterangan'        => 'required',
        ]);
    
        //get data Blog by ID
        $datamuzakki = Datamuzakki::findOrFail($datamuzakki->id);
    
        //if($request->file('image') == "") {
    
            $datamuzakki->update([
                //'image'             => $image->hashName(),
                'kode_muzakki'      => $request->kode_muzakki,
                //'name_user'         => $request->name_user,
                'name_muzakki'      => $request->name_muzakki,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'profesi'           => $request->profesi,
                //'tanggal_dibuat'    => $request->tanggal_dibuat,
                //'keterangan'        => $request->keterangan,
            ]);
    
        /*} else {
    
            //hapus old image
            Storage::disk('local')->delete('public/datamuzakkis/'.$datamuzakki->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/datamuzakkis', $image->hashName());
    
            $datamuzakki->update([
                'image'             => $image->hashName(),
                'kode_muzakki'      => $request->kode_muzakki,
                'name_user'         => $request->name_user,
                'name_muzakki'      => $request->name_muzakki,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'profesi'           => $request->profesi,
                'tanggal_dibuat'    => $request->tanggal_dibuat,
                'keterangan'        => $request->keterangan,
            ]);
        }*/
    
        if($datamuzakki){
            //redirect dengan pesan sukses
            return redirect()->route('datamuzakki.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datamuzakki.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datamuzakki  $datamuzakki
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datamuzakki $datamuzakki)
    {
        $datamuzakki = Datamuzakki::findOrFail($datamuzakki->id);
        //Storage::disk('local')->delete('public/datamuzakkis/'.$datamuzakki->image);
        $datamuzakki->delete();

        if($datamuzakki){
            //redirect dengan pesan sukses
            return redirect()->route('datamuzakki.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datamuzakki.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
