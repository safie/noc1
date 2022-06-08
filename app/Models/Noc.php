<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noc extends Model
{
    use HasFactory;
    protected $table        = 't_noc';
    protected $primaryKey   = 'id';
    protected $fillable     = [
        'tajuk_permohonan',
        'tarikh_permohonan',
        'tarikh_surat_kementerian',
        'no_rujukan',
        'kod_myprojek',
        'kementerian',
        'bahagian',
        'tarikh_submit',
        'status_semak',
        'tarikh_semak',
        'tarikh_mohon_ulasan',
        'tarikh_sedia_ulasan',
        'tarikh_hantar_ulasan',
        'tarikh_sedia_memo_kelulusan',
        'tarikh_hantar_memo_kelulusan',
        'tarikh_kelulusan_pt',
        'tarikh_sedia_surat',
        'tarikh_hantar_surat_lulus',
        'tarikh_mohon_modul'
    ];
    public $timestamps      = true;
}
