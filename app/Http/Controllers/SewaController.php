<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SewaModel;

class SewaController extends Controller
{
	public function __construct()
	{
		$this->SewaModel = new SewaModel();
		$this->middleware('auth');
	}

	public function index()
	{
		$datawo = ['sewa' => $this->SewaModel->allData(),];
		return view('sewa', $datawo);
	}

	public function detail($id)
	{
		if(!$this->SewaModel->detailData($id)){
			abort(404);
		}

		$datawo = ['sewa' => $this->SewaModel->detailData($id),];
		return view('detailsewa', $datawo);
	}

	public function add()
	{
		return view ('addsewa');
	}

	public function insert()
	{
		Request()->validate([
			'nama_paket' => 'required|unique:tb_jenissewa',
			'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
			'rincian' => 'required',
		]);
		

		$file = Request()->foto;
		$fileName = Request()->nama_paket.'.'.$file->extension();
		$file->move(public_path('foto_paket'),$fileName);
		$datawo = [
			'nama_paket' => Request()->nama_paket,
			'foto' => $fileName,
			'rincian' => Request()->rincian,
		];
		
		$this->SewaModel->addData($datawo);
		return redirect()->route('sewa')->with('message','Data Berhasil Disimpan');
	}

	public function edit($id)
	{
		if(!$this->SewaModel->detailData($id)){
			abort(404);
		}

		$datawo = ['sewa' => $this->SewaModel->detailData($id),];
		return view ('editsewa',$datawo);
	}

	public function update($id)
	{
		Request()->validate([
			'nama_paket' => 'required|unique:tb_jenissewa',
			'foto' => 'mimes:jpg,jpeg,bmp,png|max:1024',
			'rincian' => 'required',
		]);
		
		if(Request()->foto <> ""){
			$file = Request()->foto;
			$fileName = Request()->nama_paket.'.'.$file->extension();
			$file->move(public_path('foto_paket'),$fileName);
			$datawo = [
				'nama_paket' => Request()->nama_paket,
				'foto' => $fileName,
				'rincian' => Request()->rincian,
			];
			
			$this->SewaModel->editData($id,$datawo);
		}else{
			$datawo = [
				'nama_paket' => Request()->nama_paket,
				'rincian' => Request()->rincian,
			];
			
			$this->SewaModel->editData($id,$datawo);
		}


		return redirect()->route('sewa')->with('message','Data Berhasil Diubah');
	}
	
	public function delete($id){
		$sewa = $this->SewaModel->detailData($id);
		if($sewa->foto <> ""){
			unlink(public_path('foto_paket').'/'.$sewa->foto);
		}
		$this->SewaModel->deleteData($id);
		return redirect()->route('sewa')->with('message','Data Berhasil Dihapus');
	}
	
}
