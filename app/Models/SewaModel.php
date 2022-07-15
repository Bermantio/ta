<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SewaModel extends Model
{
    public function allData()
    {
        return DB::table('tb_jenissewa')->get();
    }
    public function detailData($id)
    {
        return DB::table('tb_jenissewa')->where('id',$id)->first();
    }
    public function addData($datawo)
    {
        DB::table('tb_jenissewa')->insert($datawo);
    }
    public function editData($id,$datawo)
    {
        DB::table('tb_jenissewa')->where('id',$id)->update($datawo);
    }
    public function deleteData($id)
    {
        DB::table('tb_jenissewa')->where('id',$id)->delete();
    }
}