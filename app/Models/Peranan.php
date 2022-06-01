<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peranan extends Model
{
    use HasFactory;

    protected $table        = 't_peranan';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'peranan',
        'keterangan',
    ];
    public $timestamps      = true;
}
