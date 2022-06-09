<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahagian extends Model
{
    use HasFactory;

    protected $table        = 't_bahagian';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'nama_bhgn',
        'sgktn_bhgn',

    ];
    public $timestamps      = true;

    public function noc()
    {
        return $this->belongsTo(Noc::class);
    }
}
