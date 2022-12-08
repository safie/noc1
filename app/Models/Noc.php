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
        'noc_id',
        'tajuk_permohonan',
        'tarikh_permohonan',
        'tarikh_surat_kementerian',
        'no_rujukan',
        'kod_myprojek',
        'kementerian',
        'bahagian',
        'klasifikasi',
        'no_rujukan_surat_kelulusan',
        'noc_flow',
        'status_noc',
        'status_noc2',
        'tarikh_submit',
        'kos_projek',
        'kos_sebelum',
        'kos_perubahan',
        'url_dokumen',
        'status_semak',
        'status_semak_tek',
        'status_semak_bajet',
        'pengurusan_tertinggi',
        'tarikh_semak',
        'tarikh_semak_bajet',
        'tarikh_semak_tek',
        'tarikh_dokumen_tambahan',
        'tarikh_dokumen_tambahan_bajet',
        'tarikh_dokumen_tambahan_tek',
        'tarikh_mohon_ulasan',
        'tarikh_mohon_ulasan_tek',
        'tarikh_sedia_ulasan',
        'tarikh_sedia_ulasan_tek',
        'tarikh_hantar_ulasan',
        'tarikh_hantar_ulasan_tek',
        'tarikh_sedia_memo_kelulusan',
        'tarikh_hantar_memo_kelulusan',
        'tarikh_kelulusan_pt',
        'tarikh_sedia_surat',
        'tarikh_hantar_surat_lulus',
        'tarikh_mohon_modul',

    ];
    public $timestamps  = true;


    public function getProjek()
    {
        return $this->belongsTo(Projek::class, 'kod_myprojek','kod_projek');
    }
}
