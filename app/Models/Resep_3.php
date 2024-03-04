<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep_3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nama',
        'pencipta',
        'deskripsi',
        'rating',
        'last_update',
    ];
    protected $table = 'resep_3';
}