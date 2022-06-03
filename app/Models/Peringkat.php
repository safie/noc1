<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peringkat extends Model
{
    use HasFactory;
    protected $table        = 't_peringkat';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'nama_peringkat',
        'order',

    ];
    public $timestamps      = true;


}
