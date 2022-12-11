<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keputusan extends Model
{
    use HasFactory;

    protected $table        = 't_keputusan';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'keputusan'

    ];
    public $timestamps      = true;
}
