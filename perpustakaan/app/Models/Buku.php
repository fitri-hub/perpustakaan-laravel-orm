<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    public $timestamps = false;

    protected $fillable = [
        'judul',
        'penulis',
        'tahun'
    ];
}