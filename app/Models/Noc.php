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
        'pengurusan_tinggi',
        'tarikh_semak',
        'tarikh_semak_bajet',
        'tarikh_semak_tek',
        'tarikh_dokumen_tambahan',
        'tarikh_dokumen_tambahan_bajet',
        'tarikh_dokumen_tambahan_tek',
        'tarikh_mohon_ulasan',
        'tarikh_mohon_ulasan_tek',
        'ulasan_bajet',
        'ulasan_teknikal',
        'tarikh_sedia_ulasan',
        'tarikh_sedia_ulasan_tek',
        'tarikh_hantar_ulasan',
        'tarikh_hantar_ulasan_tek',
        'tarikh_sedia_memo_kelulusan',
        'tarikh_hantar_memo_kelulusan',
        'tarikh_kelulusan_pt',
        'keputusan',
        'tarikh_sedia_surat',
        'tarikh_hantar_surat_lulus',
        'tarikh_mohon_modul',

    ];
    public $timestamps  = true;


    public function getProjek()
    {
        return $this->belongsTo(Projek::class, 'kod_myprojek', 'kod_projek');
    }

    public function getKategori()
    {
        return $this->belongsTo(Kategori::class, 'klasifikasi', 'id');
    }

    public function getBahagian()
    {
        return $this->belongsTo(Bahagian::class, 'bahagian', 'id');
    }

    public function getStatus1()
    {
        return $this->belongsTo(Status::class, 'status_noc', 'id_status');
    }

    public function getStatus2()
    {
        return $this->belongsTo(Status::class, 'status_noc2', 'id_status');
    }

    public function getKeputusan()
    {
        return $this->belongsTo(Keputusan::class, 'keputusan', 'id');
    }

    public function getPengurusanTinggi()
    {
        return $this->belongsTo(PengurusanTinggi::class, 'pengurusan_tinggi', 'id');
    }
}
