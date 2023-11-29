<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    
    protected $fillable = [
        'nama',
        'umur',
        'kelamin',
        'diagnostik1',
        'diagnostik2',
        'diagnostik3',
        'diagnostik4',
        'diagnostik5',
        'diagnostik6',
        'diagnostik7',
        'diagnostik8',
        'diagnostik9',
        'diagnostik10',
        'hasil_diagnosis',
        'GERD_akut',
        'GERD_kronis',
    ];
}
