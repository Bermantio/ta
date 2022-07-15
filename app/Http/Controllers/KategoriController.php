<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
	public function __construct()
	{
		$this->KategoriModel = new KategoriModel();
		$this->middleware('auth');
	}

	public function index()
	{
		$datakat = ['kategori' => $this->KategoriModel->allData(),];
		return view('kategori', $datakat);
	}

	public function detail($id)
	{
		if(!$this->KategoriModel->detailData($id)){
			abort(404);
		}

		$datakat = ['kategori' => $this->KategoriModel->detailData($id),];
		return view('detailkategori', $datakat);
	}

	public function add()
	{
		return view ('addkategori');
	}

	public function insert()
	{
		Request()->validate([
			'nama_kategori' => 'required|unique:tb_kategori',
		]);
		
		$datakat = [
			'nama_kategori' => Request()->nama_kategori,
		];
		
		$this->KategoriModel->addData($datakat);
		return redirect()->route('kategori')->with('message','Data Berhasil Disimpan');
	}

	public function edit($id)
	{
		if(!$this->KategoriModel->detailData($id)){
			abort(404);
		}

		$datakat = ['kategori' => $this->KategoriModel->detailData($id),];
		return view ('editkategori',$datakat);
	}

	public function update($id)
	{
		Request()->validate([
			'nama_kategori' => 'required|unique:tb_kategori',
		]);
		
			$datakat = [
				'nama_kategori' => Request()->nama_kategori,
			];
			
			$this->KategoriModel->editData($id,$datakat);

		return redirect()->route('kategori')->with('message','Data Berhasil Diubah');
	}
	
	public function delete($id){
		$kategori = $this->KategoriModel->detailData($id);
		$this->KategoriModel->deleteData($id);
		return redirect()->route('kategori')->with('message','Data Berhasil Dihapus');
	}
	
}
