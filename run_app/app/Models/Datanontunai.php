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
        'tanggal_transaksi', 'name_zakki', 'alamat', 'notelepon', 'profesi','name_program',
        'keterangan','berupa','jumlah_transaksi', 'image','status'
    ];
}
