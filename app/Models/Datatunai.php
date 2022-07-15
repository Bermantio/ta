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
        'kode_transaksi', 'kode_muzakki', 'name_muzakki','tanggal_transaksi', 'jumlah_transaksi', 'status'
    ];
}
