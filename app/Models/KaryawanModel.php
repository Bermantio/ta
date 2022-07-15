<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KaryawanModel extends Model
{
    public function allData()
    {
        return DB::table('tb_karyawan')->get();
    }
    public function detailData($id)
    {
        return DB::table('tb_karyawan')->where('id',$id)->first();
    }
    public function addData($datakry)
    {
        DB::table('tb_karyawan')->insert($datakry);
    }
    public function editData($id,$datakry)
    {
        DB::table('tb_karyawan')->where('id',$id)->update($datakry);
    }
    public function deleteData($id)
    {
        DB::table('tb_karyawan')->where('id',$id)->delete();
    }
}