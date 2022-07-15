<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PengeluaranModel extends Model
{
    public function allData()
    {
        return DB::table('tb_pengeluaran')->get();
    }
    public function detailData($id)
    {
        return DB::table('tb_pengeluaran')->where('id',$id)->first();
    }
    public function addData($datapeng)
    {
        DB::table('tb_pengeluaran')->insert($datapeng);
    }
    public function editData($id,$datapeng)
    {
        DB::table('tb_pengeluaran')->where('id',$id)->update($datapeng);
    }
    public function deleteData($id)
    {
        DB::table('tb_pengeluaran')->where('id',$id)->delete();
    }
    public function get_kategori(){
        return $this->belongsTo('App\\Model\\KategoriModel', 'nama_kategori', 'id');
    }
}