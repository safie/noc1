<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengurusanTinggi extends Model
{
    use HasFactory;

    protected $table        = 't_pengurusan_tinggi';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'nama_pt'
    ];
    public $timestamps      = true;
}
