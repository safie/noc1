<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

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
        //bilangan noc keseluruhan
        $noc = DB::table('t_noc')
            ->select('id')
            ->get();
        $data1['noc'] = $noc->count();

        //bilangan semakan noc
        $nocSemak = DB::table('t_noc')
            ->select('id', 'status_noc')
            ->where('status_noc', '=', "noc_1")
            ->get();
        $data2['nocSemak'] = $nocSemak->count();

        //bilangan sedia ulasan
        $nocSediaUlasan = DB::table('t_noc')
            ->select('id', 'status_noc')
            ->where('status_noc', '=', "noc_4")
            ->get();
        $data3['nocSediaUlasan'] = $nocSediaUlasan->count();

        //bilangan maklumat tambahan
        $nocTambahan = DB::table('t_noc')
            ->select('id', 'status_noc')
            ->where('status_noc', '=', "noc_12")
            ->get();
        $data4['nocTambahan'] = $nocTambahan->count();

        //bilangan noc penyediaan memo
        $nocMemo = DB::table('t_noc')
            ->select('id', 'status_noc')
            ->where('status_noc', '=', "noc_6")
            ->get();
        $data5['nocMemo'] = $nocMemo->count();

        //bilangan modul NOC myProjek
        $nocModul = DB::table('t_noc')
            ->select('id', 'status_noc')
            ->where('status_noc', '=', "noc_10")
            ->get();
        $data6['nocModul'] = $nocModul->count();

        //Senarai klasifikasi
        $nocKlasifikasi = DB::table('t_kategori')->take(10)->get();

        $data7['nocKlasifikasi'] = $nocKlasifikasi;

        //Senarai status
        $nocStatus = DB::table('t_status')->take(10)->get();

        $data8['nocStatus'] = $nocStatus;


        //Senarai kementerian
        $nocJabatan = DB::table('t_kementerian')->take(10)->get();

        $data9['nocJabatan'] = $nocJabatan;

        return view('home')
            ->with($data1)
            ->with($data2)
            ->with($data3)
            ->with($data4)
            ->with($data5)
            ->with($data6)
            ->with($data7)
            ->with($data8)
            ->with($data9);
    }
}
