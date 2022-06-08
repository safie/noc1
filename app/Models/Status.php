<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table        = 't_status';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'id_status',
        'nama_status',

    ];
    public $timestamps      = true;
}
