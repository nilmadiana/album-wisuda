<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Jurusan;

class Wisudawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'judul',
        'ipk',
        'jurusan',
        'foto',
    ];

    public function getJurusanLabelAttribute()
    {
        return Jurusan::getLabels()[$this->jurusan];
    }
    
}
