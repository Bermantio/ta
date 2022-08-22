<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datalazismu extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kode_kantor', 'name_kantor', 'name_pimpinan','alamat', 'notelp', 'email'
    ];
}
