<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamuzakki extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'kode_muzakki', 'name_user','name_muzakki', 'jenis_kelamin', 
        'alamat', 'profesi', 'tanggal_dibuat', 'keterangan'
    ];
}
