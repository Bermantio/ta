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
        'kode_transaksi', 'kode_zakki', 'name_zakki','tanggal_transaksi', 'jumlah_transaksi', 'status'
    ];
}
