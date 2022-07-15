<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PengeluaranModel;

class PengeluaranController extends Controller
{
	public function __construct()
	{
		$this->PengeluaranModel = new PengeluaranModel();
		$this->middleware('auth');
	}

	public function index()
	{
		$datapeng = ['luaran' => $this->PengeluaranModel->allData(), with('get_kategori'),];
		return view('luaran', $datapeng);
	}

	public function detail($id)
	{
		if(!$this->PengeluaranModel->detailData($id)){
			abort(404);
		}

		$datapeng = ['luaran' => $this->PengeluaranModel->detailData($id), with('get_kategori'),];
		return view('detailluaran', $datapeng);
	}

	public function add()
	{
		$nama_kategori = DB::table("tb_kategori")->pluck("nama_kategori","id");
        return view ('addluaran', compact('nama_kategori'));
	}

	public function insert()
	{
        Request()->validate([
			'nama_pengeluaran' => 'required',
			'tgl_pengeluaran' => 'required',
			'nama_kategori' => 'required',
            'pengeluaran' => 'required',
		]);
		

		$datapeng = [
			'nama_pengeluaran' => Request()->nama_pengeluaran,
			'tgl_pengeluaran' => Request()->tgl_pengeluaran,
			'nama_kategori' => Request()->nama_kategori,
			'pengeluaran' => Request()->pengeluaran,
		];
		
		$this->PengeluaranModel->addData($datapeng);
		return redirect()->route('luaran')->with('message','Data Berhasil Disimpan');
	}

	public function edit($id)
	{
		if(!$this->PengeluaranModel->detailData($id)){
			abort(404);
		}

		$datapeng = ['luaran' => $this->PengeluaranModel->detailData($id),];
		return view ('editluaran',$datapeng);
	}

	public function update($id)
	{
		Request()->validate([
			'nama_pengeluaran' => 'required',
			'tgl_pengeluaran' => 'required',
			'nama_kategori' => 'required',
            'pengeluaran' => 'required',
		]);
		
			$datapeng = [
				'nama_pengeluaran' => Request()->nama_pengeluaran,
			    'tgl_pengeluaran' => Request()->tgl_pengeluaran,
			    'nama_kategori' => Request()->nama_kategori,
			    'pengeluaran' => Request()->pengeluaran,
			];
			$this->PengeluaranModel->editData($id,$datapeng);

		return redirect()->route('luaran')->with('message','Data Berhasil Diubah');
	}
	
	public function delete($id){
		$luaran = $this->PengeluaranModel->detailData($id);
		$this->PengeluaranModel->deleteData($id);
		return redirect()->route('luaran')->with('message','Data Berhasil Dihapus');
	}
	
}
