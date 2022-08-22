<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datalaporan extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name_kantor', 'jenis_program','jenis_transaksi', 'jumlah_transaksi', 'status','email'
    ];
}
