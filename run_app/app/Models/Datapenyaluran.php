<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapenyaluran extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kode_transaksi', 'tanggal_penyaluran', 'name_program','name', 'jumlah_donasi'
    ];
}
