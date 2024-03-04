<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_4 extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nama',
        'pencipta',
        'durasi',
        'porsi',
        'tingkat_kesulitan',
        'catatan',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
    ];

    protected $table = 'detail_4';
}