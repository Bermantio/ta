<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class ProfilController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = User::where('id', Auth::user()->id)->first();
    	return view('profil.index', compact('user'));
    }

    public function update(Request $request, User $user)
    {
    	 $this->validate($request, [
            'image'             => 'required|image|mimes:png,jpg,jpeg',
            'name'              => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'email'             => 'required',
            'notelepon'         => 'required',
            'profesi'           => 'required',
            'password'          => 'required',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	if($request->file('image') == "") {
    
            $user->update([
              'image'               => $image->hashName(),
                'name'              => $request->name,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'email'             => $request->email,
                'notelepon'         => $request->notelepon,
                'profesi'           => $request->profesi,
                'password'          =>Hash::make($request->password),
            ]);        
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/datausers/'.$user->image);
    
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/datausers', $image->hashName());
    
            $user->update([
                'image'             => $image->hashName(),
                'name'              => $request->name,
                'jenis_kelamin'     => $request->jenis_kelamin,
                'alamat'            => $request->alamat,
                'email'             => $request->email,
                'notelepon'         => $request->notelepon,
                'profesi'           => $request->profesi,
                'password'          =>Hash::make($request->password),
            ]);
        }
    
        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('profil.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profil.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'             => 'required|image|mimes:png,jpg,jpeg',
            'name'              => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'email'             => 'required',
            'notelepon'         => 'required',
            'profesi'           => 'required',
            'password'          => 'required',
        ]);

        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->alamat = $request->alamat;
        $user->notelepon = $request->notelepon;
        $user->profesi = $request->profesi;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }
}
