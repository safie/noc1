<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

if (!function_exists('count_tindakan')) {
    function count_tindakan()
    {
        if (Auth::user()->peranan == 2) {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    'status1.nama_status as nama_status1',
                    'status2.nama_status as nama_status2',
                    't_kategori.nama_kat',
                )
                ->where('bahagian', '=', Auth::user()->bahagian)

                ->where(function ($query) {
                    $query->whereIn('status_noc', ['noc_1', 'noc_17', 'noc_2', 'noc_18', 'noc_19', 'noc_9', 'noc_10', 'noc_11', 'noc_12', 'noc_13', 'noc_14'])
                        ->orWhere('status_noc2', 'noc_19');
                })
                ->orwhere(function ($query) {
                    $query->where('status_noc', 'noc_15')
                        ->Where('keputusan', '!=', 2);
                })
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status as status1', 'status1.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_status as status2', 'status2.id_status', '=', 't_noc.status_noc2')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->orderBy('t_noc.tarikh_submit', 'DESC')
                ->get();
        } else if (Auth::user()->peranan == 3) {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    'status1.nama_status as nama_status1',
                    'status2.nama_status as nama_status2',
                    't_kategori.nama_kat',
                )
                ->whereIn('status_noc', ['noc_3', 'noc_5', 'noc_7'])
                // ->where('keputusan', '!=', 2)
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status as status1', 'status1.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_status as status2', 'status2.id_status', '=', 't_noc.status_noc2')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->orderBy('t_noc.tarikh_submit', 'DESC')
                ->get();
        } else if (Auth::user()->peranan == 4) {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    'status1.nama_status as nama_status1',
                    'status2.nama_status as nama_status2',
                    't_kategori.nama_kat',
                )
                ->whereIn('status_noc2', ['noc_4', 'noc_6', 'noc_8'])
                // ->where('keputusan', '!=', 2)
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status as status1', 'status1.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_status as status2', 'status2.id_status', '=', 't_noc.status_noc2')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->orderBy('t_noc.tarikh_submit', 'DESC')
                ->get();
        } else {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    'status1.nama_status as nama_status1',
                    'status2.nama_status as nama_status2',
                    't_kategori.nama_kat',
                )
                // ->where('keputusan', '!=', 2)
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status as status1', 'status1.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_status as status2', 'status2.id_status', '=', 't_noc.status_noc2')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->orderBy('t_noc.tarikh_submit', 'DESC')
                ->get();
        }

        // $noc = DB::table('t_noc')->where('bahagian', '=', Auth::user()->bahagian)->get();
        $countNocTindakan = $noc->count();

        return $countNocTindakan;
    }
}

if (!function_exists('count_all_noc')) {
    function count_all_noc()
    {
        $noc = DB::table('t_noc')
            ->select('t_noc.*')
            ->whereNot('status_noc', '=', 'noc_20')
            ->get();
        $countAllNoc = $noc->count();

        return $countAllNoc;
    }
}

if (!function_exists('count_all_semakan')) {
    function count_all_semakan()
    {
        $noc = DB::table('t_noc')
            ->select('t_noc.*')
            ->whereIn('status_noc', ['noc_1', 'noc_2', 'noc_5', 'noc_6'])
            ->get();
        $countAllSemakan = $noc->count();

        return $countAllSemakan;
    }
}

if (!function_exists('count_all_ulasan')) {
    function count_all_ulasan()
    {
        $noc = DB::table('t_noc')
            ->select('t_noc.*')
            ->whereIn('status_noc', ['noc_3', 'noc_4', 'noc_7', 'noc_8', 'noc_9', 'noc_10'])
            ->get();
        $countAllUlasan = $noc->count();

        return $countAllUlasan;
    }
}

if (!function_exists('count_all_tambahan')) {
    function count_all_tambahan()
    {
        $noc = DB::table('t_noc')
            ->select('t_noc.*')
            ->whereIn('status_noc', ['noc_17', 'noc_18', 'noc_19'])
            ->get();
        $countAllTambahan = $noc->count();

        return $countAllTambahan;
    }
}

if (!function_exists('count_all_memo')) {
    function count_all_memo()
    {
        $noc = DB::table('t_noc')
            ->select('t_noc.*')
            ->whereIn('status_noc', ['noc_11', 'noc_12', 'noc_13', 'noc_14', 'noc_15'])
            ->get();
        $countAllMemo = $noc->count();

        return $countAllMemo;
    }
}

if (!function_exists('count_all_selesai')) {
    function count_all_selesai()
    {
        $noc = DB::table('t_noc')
            ->select('t_noc.*')
            ->whereIn('status_noc', ['noc_16'])
            ->get();
        $countAllSelesai = $noc->count();

        return $countAllSelesai;
    }
}
