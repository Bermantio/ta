<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datatunai extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    //protected $table = "datatunai";
    protected $fillable = [
         'kode_muz', 'name_muz', 'tanggal_transaksi', 'name_program',  'jumlah_transaksi', 'status'
    ];
}
