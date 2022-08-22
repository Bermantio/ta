<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nontunai extends Model
{
    use HasFactory;

    protected $fillable = [
    'tanggaltransaksi', 'name_zakki', 'alamat', 'profesi', 'name_program', 'keterangan', 'berupa', 'jumlah_transaksi', 'image', 'status'
    ];
}
