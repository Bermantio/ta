<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\DataProfilResource;
use Illuminate\Support\Facades\Validator;

class ApiDataProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_profil = User::latest()->paginate(5);

        return new DataProfilResource(true, 'List Data', $data_profil);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
            'image'             => 'required|image|mimes:png,jpg,jpeg',
            'name'              => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'email'             => 'required',
            'notelepon'         => 'required',
            'profesi'           => 'required',
            'password'          => 'required',
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/profils', $image->hashName());
        
        $data_profil = User::create([
            'user' => $request->jenis_kelamin,
            'user' => $request->alamat,
            'user' => $request->notelepon,
            'user' => $request->profesi,
            'user' => $request->name,
            'user' => $request->email,
            'user' => Hash::make($request->password),
        ]);
        return new DataProfilResource(true, 'List Data', $data_profil);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return new DataProfilResource(true, 'Data Telah Ditemukan', $request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $dataprofil, $id)
    {
        $validasi=$request->validate([
            'image'             => '',
            'name'              => 'required',
            'jenis_kelamin'     => 'required',
            'alamat'            => 'required',
            'email'             => 'required',
            'notelepon'         => 'required',
            'profesi'           => 'required',
            //'password'          => 'required',
        ]);
        try {
            if($request->file('image')){
                $fileName = time().$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('uploads/profil',$fileName);
                $validasi['image']=$path;
            }
            $response = User::find($id);
            $response->update($validasi);
            return response()->json([
                'success' => true,
                'message' =>'success'
            ]);
        } catch (\Eception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
        
        $dataprofil = profil::update([
            'user' => $request->jenis_kelamin,
            'user' => $request->alamat,
            'user' => $request->notelepon,
            'user' => $request->profesi,
            'user' => $request->name,
            'user' => $request->email,
            //'user' => Hash::make($request->password),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataprofil = User::find($id);
        $dataprofil->delete();
        return response()->json([
            'success' => true,
            'message' =>'success'
        ]);
    }
}
