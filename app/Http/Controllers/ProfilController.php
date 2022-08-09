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
            'name'  => 'required',
			'email'  => 'required',
			'jenis_kelamin'  => 'required',
			'alamat'  => 'required',
			'profesi'  => 'required',
			'notelepon'  => 'required',
			'password'  => 'confirmed',
        ]);

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
		$user->jenis_kelamin = $request->jenis_kelamin;
		$user->profesi = $request->profesi;
    	$user->alamat = $request->alamat;
		$user->notelepon = $request->notelepon;
    	if(!empty($request->password))
    	{
    		$user->password = Hash::make($request->password);
    	}
    	
    	$user->update();

    	Alert::success('User Sukses diupdate', 'Success');
    	return redirect('profil');
    }
}
