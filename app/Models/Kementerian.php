<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kementerian extends Model
{
    use HasFactory;

    protected $table        = 't_kementerian';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'nama_jabatan',
        'sgktn_jabatan',

    ];
    public $timestamps      = true;
}
