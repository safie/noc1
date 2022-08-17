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
        'status_noc',
        'status_noc2',
        'kod_myprojek',
        'kementerian',
        'bahagian',
        'klasifikasi',
        'noc_flow',
        'pengurusan_tertinggi',
        'tarikh_submit',
        'status_semak',
        'status_semak_tek',
        'status_semak_bajet',
        'tarikh_semak',
        'tarikh_semak_tek',
        'tarikh_semak_bajet',
        'tarikh_dokumen_tambahan',
        'tarikh_dokumen_tambahan_tek',
        'tarikh_dokumen_tambahan_bajet',
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
        'tarikh_mohon_modul'
    ];
    public $timestamps  = true;

    public function getBahagian()
    {
        return $this->hasMany(Bahagian::class,'id','bahagian');
    }

    public function getKementerian()
    {
        return $this->hasMany(Kementerian::class,'id','kementerian');
    }

    public function getStatus()
    {
        return $this->hasMany(Status::class,'id','status_noc');
    }

    public function getKategori()
    {
        return $this->hasMany(Kategori::class,'kod','klasifikasi');
    }
}
