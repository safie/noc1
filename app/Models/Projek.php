<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;
    protected $table        = 't_projek_rp2_2022';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'id_kementerian',
        'nama_projek',
        'kod_projek',
        'kos_keseluruhan',
        'kos_de_asal',
        'kos_de_dipinda',
        'siling_asal_2022',
        'siling_dipinda_2022',
    ];
    public $timestamps      = true;

    public function getKementerian()
    {
        return $this->belongsTo(Kementerian::class, 'id_kementerian', 'id');
    }
}
