<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'judul',
        'cover',
        'file',
        'tahun',
        'undangan',
        'total',
        's1_pai',
        's1_mpi',
        's1_pgmi',
        's2_pai',
        'deskripsi',
    ];
}
