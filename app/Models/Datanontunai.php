<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datanontunai extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kode_transaksi', 'tanggal_transaksi','kode_zakki', 'name_zakki', 
        'jenis_kelamin','alamat','notelepon','profesi','name_program',
        'keterangan','berupa','jumlah_transaksi', 'image','status'
    ];
}
