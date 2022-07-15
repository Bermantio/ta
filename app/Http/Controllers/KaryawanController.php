<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KaryawanModel;

class KaryawanController extends Controller
{
	public function __construct()
	{
		$this->KaryawanModel = new KaryawanModel();
		$this->middleware('auth');
	}

	public function index()
	{
		$datakry = ['karyawan' => $this->KaryawanModel->allData(),];
		return view('karyawan', $datakry);
	}

	public function detail($id)
	{
		if(!$this->KaryawanModel->detailData($id)){
			abort(404);
		}

		$datakry = ['karyawan' => $this->KaryawanModel->detailData($id),];
		return view('detailkaryawan', $datakry);
	}

	public function add()
	{
		return view ('addkaryawan');
	}

	public function insert()
	{
		Request()->validate([
			'nama_kry' => 'required|unique:tb_karyawan',
			'alamat' => 'required',
			'nohp' => 'required|numeric',
			'posisi' => 'required',
			'gaji' => 'required',
		]);
		

		$datakry = [
			'nama_kry' => Request()->nama_kry,
			'alamat' => Request()->alamat,
			'nohp' => Request()->nohp,
			'posisi' => Request()->posisi,
			'gaji' => Request()->gaji,
		];
		
		$this->KaryawanModel->addData($datakry);
		return redirect()->route('karyawan')->with('message','Data Berhasil Disimpan');
	}

	public function edit($id)
	{
		if(!$this->KaryawanModel->detailData($id)){
			abort(404);
		}

		$datakry = ['karyawan' => $this->KaryawanModel->detailData($id),];
		return view ('editkaryawan',$datakry);
	}

	public function update($id)
	{
		Request()->validate([
			'nama_kry' => 'required|unique:tb_karyawan',
			'alamat' => 'required',
			'nohp' => 'required|numeric',
			'posisi' => 'required',
			'gaji' => 'required',
		]);
		
			$datakry = [
				'nama_kry' => Request()->nama_kry,
				'alamat' => Request()->alamat,
				'nohp' => Request()->nohp,
				'posisi' => Request()->posisi,
				'gaji' => Request()->gaji,
			];
			
			$this->KaryawanModel->editData($id,$datakry);

		return redirect()->route('karyawan')->with('message','Data Berhasil Diubah');
	}
	
	public function delete($id){
		$karyawan = $this->KaryawanModel->detailData($id);
		$this->KaryawanModel->deleteData($id);
		return redirect()->route('karyawan')->with('message','Data Berhasil Dihapus');
	}
	
}
