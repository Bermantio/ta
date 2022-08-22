<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataprogram extends Model
{
    use HasFactory;
     /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'kode_program', 'name_program', 'jenis_program','tanggal_program','deskripsi'
    ];
}
