<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatauserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datausers = User::latest()->paginate(10);
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

    public function search(Request $request)
    {
        $search = $request->get('search');
        $datausers = User::latest()->where('name_user', 'like', '%'.$search.'%')->paginate(10);
        return view('datauser.index',['datausers' => $datausers]);
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
            'name'         => 'required',
            //'jenis_kelamin'     => 'required',
            //'alamat'            => 'required',
            'email'             => 'required',
            //'notelepon'            => 'required',
            //'profesi'           => 'required',
            'role'            => 'required',
            'password' => 'required',
        ]);

        //upload image
        //$image = $request->file('image');
        //$image->storeAs('public/datausers', $image->hashName());

        //insert ke tabel user
        $datauser = new \App\Models\User;
        $datauser->role = $request->role;
        //$datauser->jenis_kelamin = $request->jenis_kelamin;
        //$datauser->alamat = $request->alamat;
        //$datauser->notelepon = $request->notelepon;
        //$datauser->profesi = $request->profesi;
        $datauser->name = $request->name;
        $datauser->email = $request->email;
        $datauser->password = Hash::make($request->password);
        $datauser->save();
        
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
    public function show(User $datauser)
    {
        return view('datauser.show',compact('datauser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datauser  $datauser
     * @return \Illuminate\Http\Response
     */
    public function edit(User $datauser)
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
    public function update(Request $request, User $datauser)
    {
        $this->validate($request, [
            'image'             => 'required|image|mimes:png,jpg,jpeg',
            'name'         => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'email'             => 'required',
            'notelepon'            => 'required',
            'profesi'           => 'required',
            'role'            => 'required',
            'password' => 'required',
        ]);
    
        //get data Blog by ID
        $datauser = User::findOrFail($datauser->id);
    
        if($request->file('image') == "") {
    
            $datauser->update([
                'image'             => $image->hashName(),
                'name'      => $request->name,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'email'             => $request->email,
                'notelepon'            => $request->notelepon,
                'profesi'           => $request->profesi,
                'role'            => $request->role,
                'password' =>Hash::make($request->password),
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/datausers/'.$datauser->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/datausers', $image->hashName());
    
            $datauser->update([
                'image'             => $image->hashName(),
                'name'      => $request->name,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'email'             => $request->email,
                'notelepon'            => $request->notelepon,
                'profesi'           => $request->profesi,
                'role'            => $request->role,
                'password' =>Hash::make($request->password),
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
    public function destroy(User $datauser)
    {
        $datauser = User::findOrFail($datauser->id);
        $datauser->delete();

        if($datauser){
            //redirect dengan pesan sukses
            return redirect()->route('datauser.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datauser.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
