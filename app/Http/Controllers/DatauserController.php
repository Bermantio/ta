<?php

namespace App\Http\Controllers;

use App\Models\Datauser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DatauserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datausers = Datauser::latest()->paginate(10);
        return view('datauser.index', compact('datausers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datauser.create');
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
            'image'             => 'required|image|mimes:png,jpg,jpeg',
            'kode_user'         => 'required',
            'name_user'         => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'status'            => 'required',
            'email'             => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/datausers', $image->hashName());

        $datauser = Datauser::create([
            'image'             => $image->hashName(),
            'kode_user'         => $request->kode_user,
            'name_user'         => $request->name_user,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'alamat'            => $request->alamat,
            'status'            => $request->status,
            'email'             => $request->email,
        ]);

        if($datauser){
            //redirect dengan pesan sukses
            return redirect()->route('datauser.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datauser.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datauser  $datauser
     * @return \Illuminate\Http\Response
     */
    public function show(Datauser $datauser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datauser  $datauser
     * @return \Illuminate\Http\Response
     */
    public function edit(Datauser $datauser)
    {
        return view('datauser.edit', compact('datauser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datauser  $datauser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datauser $datauser)
    {
        $this->validate($request, [
            'image'             => 'required|image|mimes:png,jpg,jpeg',
            'kode_user'         => 'required',
            'name_user'         => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'status'            => 'required',
            'email'             => 'required',
        ]);
    
        //get data Blog by ID
        $datauser = Datauser::findOrFail($datauser->id);
    
        if($request->file('image') == "") {
    
            $datauser->update([
                'image'             => $image->hashName(),
                'kode_user'         => $request->kode_user,
                'name_user'         => $request->name_user,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'status'            => $request->status,
                'email'             => $request->email,
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/datausers/'.$datauser->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/datausers', $image->hashName());
    
            $datauser->update([
                'image'             => $image->hashName(),
                'kode_user'         => $request->kode_user,
                'name_user'         => $request->name_user,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'status'            => $request->status,
                'email'             => $request->email,
            ]);
        }
    
        if($datauser){
            //redirect dengan pesan sukses
            return redirect()->route('datauser.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datauser.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datauser  $datauser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datauser $datauser)
    {
        //
    }
}
