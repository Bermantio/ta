<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datauser extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image', 'kode_user', 'name_user', 'nama_lengkap','jenis_kelamin', 'alamat', 'email','notelp', 'profesi','status'
    ];
}
