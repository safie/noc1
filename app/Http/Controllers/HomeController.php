<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NocController;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if ((Auth::user()->peranan == 2)) {
            //bilangan noc keseluruhan
            $noc = DB::table('t_noc')
                ->select('id')
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->get();
            $data1['noc'] = $noc->count();

            //bilangan semakan noc
            $nocSemak = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->Where('bahagian', '=', Auth::user()->bahagian)
                ->Where(function ($query) {
                    $query->orWhere('status_noc', '=', "noc_1")
                        ->orWhere('status_noc', '=', "noc_2");
                })
                ->get();
            $data2['nocSemak'] = $nocSemak->count();

            //bilangan sedia ulasan
            $nocSediaUlasan = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->Where('bahagian', '=', Auth::user()->bahagian)
                ->Where(function ($query) {
                    $query
                        ->orWhere('status_noc', '=', "noc_3")
                        ->orWhere('status_noc', '=', "noc_4")
                        ->orWhere('status_noc', '=', "noc_7")
                        ->orWhere('status_noc', '=', "noc_8");
                })
                ->get();
            $data3['nocSediaUlasan'] = $nocSediaUlasan->count();

            //bilangan maklumat tambahan
            $nocTambahan = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->Where('bahagian', '=', Auth::user()->bahagian)
                ->Where(function ($query) {
                    $query->orWhere('status_noc', '=', "noc_17")
                        ->orWhere('status_noc', '=', "noc_18")
                        ->orWhere('status_noc', '=', "noc_19");
                })
                ->get();
            $data4['nocTambahan'] = $nocTambahan->count();

            //bilangan noc penyediaan memo
            $nocMemo = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->Where('bahagian', '=', Auth::user()->bahagian)
                ->Where(function ($query) {
                    $query->orWhere('status_noc', '=', "noc_11")
                        ->orWhere('status_noc', '=', "noc_12")
                        ->orWhere('status_noc', '=', "noc_13");
                })
                ->get();
            $data5['nocMemo'] = $nocMemo->count();

            //bilangan modul NOC myProjek
            $nocModul = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->where('status_noc', '=', "noc_16")
                ->Where('bahagian', '=', Auth::user()->bahagian)
                ->get();
            $data6['nocModul'] = $nocModul->count();

            //Senarai klasifikasi
            $nocKlasifikasi = DB::table('t_noc')
                ->selectRaw('t_noc.klasifikasi, t_kategori.nama_kat, t_kategori.id as id, count(*) as jumlah')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->groupBy('t_noc.klasifikasi', 't_kategori.id', 't_kategori.nama_kat')
                ->orderBy('jumlah', 'DESC')
                ->take(5)
                ->get();

            $data7['nocKlasifikasi'] = $nocKlasifikasi;

            //Senarai status
            $nocStatus = DB::table('t_noc')
                ->selectRaw('t_status.nama_status, t_status.id as id, count(*) as jumlah')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->groupBy('t_status.nama_status', 't_status.id')
                ->orderBy('jumlah', 'DESC')
                ->take(5)
                ->get();

            $data8['nocStatus'] = $nocStatus;

            //Senarai kementerian
            $nocJabatan = DB::table('t_noc')
                ->selectRaw('t_kementerian.nama_jabatan, count(*) as jumlah')
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->groupBy('t_kementerian.nama_jabatan')
                ->orderBy('jumlah', 'DESC')
                ->take(5)->get();

            $data9['nocJabatan'] = $nocJabatan;

            //Senarai klasifikasi
            $nocKlasifikasiAll = DB::table('t_noc')
                ->selectRaw('t_noc.klasifikasi, t_kategori.nama_kat, t_kategori.id as id, count(*) as jumlah')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->groupBy('t_noc.klasifikasi', 't_kategori.id', 't_kategori.nama_kat')
                ->orderBy('jumlah', 'DESC')
                ->get();

            $data10['nocKlasifikasiAll'] = $nocKlasifikasiAll;

            //Senarai status
            $nocStatusAll = DB::table('t_noc')
                ->selectRaw('t_status1.nama_status, t_status1.id as id, count(*) as jumlah')
                ->leftJoin('t_status as t_status1', 't_status1.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_status as t_status2', 't_status2.id_status', '=', 't_noc.status_noc2')
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->groupBy('t_status1.id')
                ->orderBy('jumlah', 'DESC')
                ->get();

            $data11['nocStatusAll'] = $nocStatusAll;

            //Senarai kementerian
            $nocJabatanAll = DB::table('t_noc')
                ->selectRaw('t_kementerian.nama_jabatan, count(*) as jumlah')
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->groupBy('t_kementerian.nama_jabatan')
                ->orderBy('jumlah', 'DESC')
                ->get();

            $data12['nocJabatanAll'] = $nocJabatanAll;
        } else {
            //bilangan noc keseluruhan
            $noc = DB::table('t_noc')
                ->select('id')
                ->get();
            $data1['noc'] = $noc->count();

            //bilangan semakan noc
            $nocSemak = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->where('status_noc', '=', "noc_1")
                ->orWhere('status_noc', '=', "noc_2")
                ->get();
            $data2['nocSemak'] = $nocSemak->count();

            //bilangan sedia ulasan
            $nocSediaUlasan = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->Where('status_noc', '=', "noc_7")
                ->orWhere('status_noc', '=', "noc_8")
                ->orWhere('status_noc', '=', "noc_3")
                ->orWhere('status_noc', '=', "noc_4")
                ->get();
            $data3['nocSediaUlasan'] = $nocSediaUlasan->count();

            //bilangan maklumat tambahan
            $nocTambahan = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->where('status_noc', '=', "noc_17")
                ->orWhere('status_noc', '=', "noc_18")
                ->orWhere('status_noc2', '=', "noc_19")
                ->get();
            $data4['nocTambahan'] = $nocTambahan->count();

            //bilangan noc penyediaan memo
            $nocMemo = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->Where('status_noc', '=', "noc_11")
                ->orWhere('status_noc', '=', "noc_12")
                ->orWhere('status_noc', '=', "noc_13")
                ->get();
            $data5['nocMemo'] = $nocMemo->count();

            //bilangan modul NOC myProjek
            $nocModul = DB::table('t_noc')
                ->select('id', 'status_noc')
                ->where('status_noc', '=', "noc_16")
                ->get();
            $data6['nocModul'] = $nocModul->count();

            //Senarai klasifikasi
            $nocKlasifikasi = DB::table('t_noc')
                ->selectRaw('t_noc.klasifikasi, t_kategori.nama_kat, t_kategori.id as id, count(*) as jumlah')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->groupBy('t_noc.klasifikasi', 't_kategori.id', 't_kategori.nama_kat')
                ->orderBy('jumlah', 'DESC')
                ->take(5)
                ->get();

            $data7['nocKlasifikasi'] = $nocKlasifikasi;

            //Senarai status
            $nocStatus = DB::table('t_noc')
                ->selectRaw('t_status.nama_status, t_status.id as id, count(*) as jumlah')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->groupBy('t_status.nama_status', 't_status.id')
                ->orderBy('jumlah', 'DESC')
                ->take(5)
                ->get();

            $data8['nocStatus'] = $nocStatus;


            //Senarai kementerian
            $nocJabatan = DB::table('t_noc')
                ->selectRaw('t_kementerian.nama_jabatan, count(*) as jumlah')
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->groupBy('t_kementerian.nama_jabatan')
                ->orderBy('jumlah', 'DESC')
                ->take(5)->get();

            $data9['nocJabatan'] = $nocJabatan;

            //Senarai klasifikasi
            $nocKlasifikasiAll = DB::table('t_noc')
                ->selectRaw('t_noc.klasifikasi, t_kategori.nama_kat, t_kategori.id as id, count(*) as jumlah')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->groupBy('t_noc.klasifikasi', 't_kategori.id', 't_kategori.nama_kat')
                ->orderBy('jumlah', 'DESC')
                ->get();

            $data10['nocKlasifikasiAll'] = $nocKlasifikasiAll;

            //Senarai status
            $nocStatusAll = DB::table('t_noc')
                ->selectRaw('t_status.nama_status, t_status.id as id, count(*) as jumlah')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->groupBy('t_status.nama_status', 't_status.id')
                ->orderBy('jumlah', 'DESC')
                ->get();

            $data11['nocStatusAll'] = $nocStatusAll;

            //Senarai kementerian
            $nocJabatanAll = DB::table('t_noc')
                ->selectRaw('t_kementerian.nama_jabatan, count(*) as jumlah')
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->groupBy('t_kementerian.nama_jabatan')
                ->orderBy('jumlah', 'DESC')
                ->get();

            $data12['nocJabatanAll'] = $nocJabatanAll;
        }

        // dd($data9);
        return view('home')
            ->with($data1)
            ->with($data2)
            ->with($data3)
            ->with($data4)
            ->with($data5)
            ->with($data6)
            ->with($data7)
            ->with($data8)
            ->with($data9)
            ->with($data10)
            ->with($data11)
            ->with($data12);
    }
}
