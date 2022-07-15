<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriModel extends Model
{
    public function allData()
    {
        return DB::table('tb_kategori')->get();
    }
    public function detailData($id)
    {
        return DB::table('tb_kategori')->where('id',$id)->first();
    }
    public function addData($datakry)
    {
        DB::table('tb_kategori')->insert($datakry);
    }
    public function editData($id,$datakry)
    {
        DB::table('tb_kategori')->where('id',$id)->update($datakry);
    }
    public function deleteData($id)
    {
        DB::table('tb_kategori')->where('id',$id)->delete();
    }
}