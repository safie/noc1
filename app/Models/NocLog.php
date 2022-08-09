<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NocLog extends Model
{
    use HasFactory;
    protected $table        = 't_status_noc_log';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'noc_id',
        'tarikh',
        'status_noc',
        'keterangan',
        'css_class',
    ];
    public $timestamps  = true;
}
