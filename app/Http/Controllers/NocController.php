<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noc;
use App\Models\Bahagian;
use App\Models\Kategori;
use App\Models\Kementerian;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $peranan = Auth::user()->peranan;

        if (($peranan == 1) or ($peranan == 3)) {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    't_status.nama_status'
                )
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->get();
            $data1['noc'] = $noc;
        } else {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    't_status.nama_status'
                )
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->get();
            // dd($noc);
            // $noc = DB::table('t_noc')->where('bahagian', '=', Auth::user()->bahagian)->get();
            $data1['noc'] = $noc;
        }



        return view('page.noc.index')
            ->with($data1);
    }

    public function tindakan()
    {
        $noc = DB::table('t_noc')
            ->select(
                't_noc.*',
                't_kementerian.nama_jabatan',
                't_kementerian.sgktn_jabatan',
                't_bahagian.nama_bhgn',
                't_bahagian.sgktn_bhgn',
                't_status.nama_status',

            )
            ->where('bahagian', '=', Auth::user()->bahagian)
            ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
            ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
            ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
            ->get();
        // dd($noc);
        // $noc = DB::table('t_noc')->where('bahagian', '=', Auth::user()->bahagian)->get();
        $data1['noc'] = $noc;
        return view('page.noc.tindakan')
            ->with($data1);
    }

    public function semakLulus($id)
    {
        $noc = Noc::find($id);
        $noc->status_noc    = "noc_2";
        $noc->status_semak  = "lulus";
        $noc->tarikh_semak  = Carbon::now();
        $noc->save();

        return redirect()->route('noc.index')->with('success', 'NOC telah disemak!');
    }
    public function semakSemula($id)
    {
        $noc = Noc::find($id);
        $noc->status_noc     = "tolak";
        $noc->status_semak   = "semak_semula";
        $noc->tarikh_semak  = Carbon::now();
        $noc->save();

        return redirect()->route('noc.index')->with('success', 'NOC telah disemak!');
    }

    public function detail($id)
    {
        $noc = DB::table('t_noc')
            ->select(
                't_noc.*',
                't_kementerian.nama_jabatan',
                't_kementerian.sgktn_jabatan',
                't_status.nama_status',
                't_kategori.kod',
                't_kategori.nama_kat'
            )
            ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
            ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
            ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
            ->where('t_noc.id', '=', $id)
            ->first();
        $data1['noc'] = $noc;

        return view('page.noc.detail')
            ->with($data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get(['id', 'nama_kat', 'kod']);
        $kementerian = Kementerian::get(['id', 'nama_jabatan', 'sgktn_jabatan']);
        $bahagian = Bahagian::get(['id', 'nama_bhgn', 'sgktn_bhgn']);
        $data1['bahagian'] = $bahagian;
        $data2['kementerian'] = $kementerian;
        $data3['tajuk_page'] = 'Permohonan NOC baharu';
        $data4['kategori'] = $kategori;
        // dd($view_data);
        return view('page.noc.create')
            ->with($data1)
            ->with($data2)
            ->with($data3)
            ->with($data4);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //check data
        $request->validate([
            'inputTajuk' => 'required',
            'inputKodMyprojek' => 'required',
            'inputRujukan' => 'required',
            'tarikhMohonNOC' => 'required',
            'tarikhSuratMohon' => 'required',
            'inputKlasifikasi' => 'required',
            'inputBahagian' => 'required',
            'inputJabatan' => 'required',
        ]);

        // dd($request['tarikhMohonNOC']);

        $request_data = $request->all();

        Noc::create([
            'tajuk_permohonan'      => $request_data['inputTajuk'],
            'kod_myprojek'    => $request_data['inputKodMyprojek'],
            'no_rujukan'    => $request_data['inputRujukan'],
            'tarikh_permohonan'  => Carbon::createFromFormat('d/m/Y', $request_data['tarikhMohonNOC'])->format('Y-m-d'),
            'tarikh_surat_kementerian'  => Carbon::createFromFormat('d/m/Y', $request_data['tarikhSuratMohon'])->format('Y-m-d'),
            'bahagian'    => $request_data['inputBahagian'],
            'klasifikasi'    => $request_data['inputKlasifikasi'],
            'kementerian'    => $request_data['inputJabatan'],
            'tarikh_submit'    => Carbon::now()->format('Y-m-d'),
            'status_noc'    => "noc_1",
        ]);



        return redirect()->route('noc.index')->with('success', 'Permohonan berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noc $noc)
    {
        $noc->delete();
        return redirect()->route('noc.index')->with('success', 'NOC berjaya dipadam');
    }
}
