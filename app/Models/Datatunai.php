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
    protected $fillable = [
        'kode_transaksi', 'tanggal_transaksi','kode_muz', 'name_muz', 'jenis_kelamin','alamat','notelepon','profesi', 'name_program','keterangan','jumlah_transaksi', 'status'
    ];
}
