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
        'kode_muzakki', 'name_muzakki', 'alamat',
    ];
}
