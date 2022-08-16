<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noc;
use App\Models\Bahagian;
use App\Models\Kategori;
use App\Models\Kementerian;
use App\Models\NocLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNOC;

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

        if (($peranan == 1) or ($peranan == 3) or ($peranan == 4)) {
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
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status as status1', 'status1.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_status as status2', 'status2.id_status', '=', 't_noc.status_noc2')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->orderBy('t_noc.tarikh_submit', 'DESC')
                ->get();

            // $noc = DB::table('t_noc')->where('bahagian', '=', Auth::user()->bahagian)->get();

        }

        $countNocTindakan = $noc->count();

        $data1['noc'] = $noc;
        $data2['countTindakan'] = $countNocTindakan;

        // dd($data2);

        return view('page.noc.index')
            ->with($data1)
            ->with($data2);
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
            // 'tarikhMohonNOC' => 'required',
            // 'tarikhSuratMohon' => 'required',
            'inputKlasifikasi' => 'required',
            // 'inputBahagian' => 'required',
            'inputJabatan' => 'required',
        ]);

        $queryFlow = DB::table('t_kategori')
            ->select('t_kategori.flow')
            ->where('t_kategori.kod', '=', $request['inputKlasifikasi'])
            ->first();

        $flow = $queryFlow->flow;


        // dd($request['tarikhMohonNOC']);

        $request_data = $request->all();

        $tahun = Carbon::now()->year;
        $bulan = Carbon::now()->month;

        // dd($flow);

        Noc::create([
            'tajuk_permohonan'      => $request_data['inputTajuk'],
            'kod_myprojek'    => $request_data['inputKodMyprojek'],
            'no_rujukan'    => $request_data['inputRujukan'],
            'tarikh_permohonan'  => Carbon::createFromFormat('d/m/Y', $request_data['tarikhMohonNOC'])->format('Y-m-d'),
            'tarikh_surat_kementerian'  => Carbon::createFromFormat('d/m/Y', $request_data['tarikhSuratMohon'])->format('Y-m-d'),
            // 'bahagian'    => $request_data['inputBahagian'],
            'bahagian'    => Auth::user()->bahagian,
            'klasifikasi'    => $request_data['inputKlasifikasi'],
            'kementerian'    => $request_data['inputJabatan'],
            'tarikh_submit'    => Carbon::now()->format('Y-m-d'),
            'status_noc'    => "noc_1",
            'noc_id'    => "NOC/" . $tahun . "/" . $bulan . "/" . $request_data['inputKlasifikasi'] . "/",
            'noc_flow' => $flow,
        ]);

        return redirect()->route('noc.tindakan')->with('success', 'Permohonan berjaya disimpan.');
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
    public function edit(Noc $noc)
    {
        $kategori = Kategori::get(['id', 'nama_kat', 'kod']);
        $kementerian = Kementerian::get(['id', 'nama_jabatan', 'sgktn_jabatan']);
        $bahagian = Bahagian::get(['id', 'nama_bhgn', 'sgktn_bhgn']);
        $data1['bahagian'] = $bahagian;
        $data2['kementerian'] = $kementerian;
        $data3['kategori'] = $kategori;
        $form = 'noc_edit';
        $tajuk = 'Edit NOC';

        // dd($data3);
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'))
            ->with($data1)
            ->with($data2)
            ->with($data3);
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
        //check data
        $request->validate([
            'inputTajuk' => 'required',
            'inputKodMyprojek' => 'required',
            'inputRujukan' => 'required',
            'tarikhMohonNOC' => 'required',
            'tarikhSuratMohon' => 'required',
            'inputKlasifikasi' => 'required',
            // 'inputBahagian' => 'required',
            'inputJabatan' => 'required',
        ]);

        $noc = Noc::find($id);
        $noc->tajuk_permohonan = $request['inputTajuk'];
        $noc->kod_myprojek   = $request['inputKodMyprojek'];
        $noc->no_rujukan    = $request['inputRujukan'];
        $noc->tarikh_permohonan  = Carbon::createFromFormat('d/m/Y', $request['tarikhMohonNOC'])->format('Y-m-d');
        $noc->tarikh_surat_kementerian  = Carbon::createFromFormat('d/m/Y', $request['tarikhSuratMohon'])->format('Y-m-d ');
        // $noc->bahagian    = $request['inputBahagian'];
        $noc->bahagian    = Auth::user()->bahagian;
        $noc->klasifikasi    = $request['inputKlasifikasi'];
        $noc->kementerian    = $request['inputJabatan'];
        // $noc->tarikh_submit    = Carbon::now()->format('Y-m-d');
        $noc->save();

        return redirect()->route('noc.index')->with('success', 'NOC berjaya diedit!');
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

        $NocLog = NocLog::find($noc);
        $NocLog->noc_id = $noc;
        $NocLog->status_noc = "delete";
        $NocLog->tarikh = Carbon::now()->format('Y-m-d');

        return redirect()->route('noc.index')->with('success', 'NOC berjaya dipadam');
    }

    public function tindakan()
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
                    $query->whereIn('status_noc', ['noc_1', 'noc_17', 'noc_2', 'noc_18', 'noc_19', 'noc_9', 'noc_10', 'noc_11', 'noc_12', 'noc_13', 'noc_14', 'noc_15'])
                        ->orWhere('status_noc2', 'noc_19');
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

        $data1['noc'] = $noc;
        $data2['countNocTindakan'] = $countNocTindakan;


        // dd($data2);

        return view('page.noc.tindakan')
            ->with($data1)
            ->with($data2);
    }

    public function detail($id)
    {

        $noc = DB::table('t_noc')
            ->select(
                't_noc.*',
                't_kementerian.nama_jabatan',
                't_kementerian.sgktn_jabatan',
                'status1.nama_status as nama_status1',
                'status2.nama_status as nama_status2',
                't_kategori.kod',
                't_kategori.nama_kat',
                't_kategori.flow',
                't_bahagian.nama_bhgn',
                't_bahagian.sgktn_bhgn'
            )
            ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
            ->leftJoin('t_status as status1', 'status1.id_status', '=', 't_noc.status_noc')
            ->leftJoin('t_status as status2', 'status2.id_status', '=', 't_noc.status_noc2')
            ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
            ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
            ->where('t_noc.id', '=', $id)
            ->first();

        $noc_status_log = DB::table('t_status_noc_log')
            ->select(
                'noc_id',
                'tarikh',
                'keterangan',
                'css_class'
            )
            ->where('t_status_noc_log.noc_id', $id)
            ->orderBy('tarikh', 'asc')
            ->get();

        $data1['noc'] = $noc;
        $data2['noc_log'] = $noc_status_log;

        return view('page.noc.detail')
            ->with($data1)
            ->with($data2);
    }

    //proses: noc_1
    public function updateSemak(Request $request, $id)
    {

        // $flow = DB::table('t_noc')
        //     ->select('t_kategori.flow')
        //     ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
        //     ->where('t_noc.id', '=', $id)
        //     ->first();

        // // if ($flow->flow == 'flow1') {
        // //     $dataFlow = "noc_11";
        // // } else {
        // //     $dataFlow = "noc_2";
        // // }

        $dataFlow = "noc_2";

        $request->validate([
            'tarikh'         => 'required',
            'inputStatusSemak'     => 'required',
        ]);

        // dd($dataFlow);

        $semakan = Noc::find($id);

        if ($request->inputStatusSemak == "dokumen-tambahan") {
            $semakan->tarikh_dokumen_tambahan = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc  = "noc_17";
            $semakan->status_semak = $request->inputStatusSemak;
            NocLog::create([
                'noc_id' => $semakan->id,
                'status_noc'    => "noc_17",
                'keterangan' => "Dokumen Tambahan",
                'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                'css_class' => "bg-danger",
            ]);
        } else if ($request->inputStatusSemak == "lulus") {
            $semakan->tarikh_semak = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc = $dataFlow;
            $semakan->status_semak = $request->inputStatusSemak;
            NocLog::create([
                'noc_id' => $semakan->id,
                'status_noc'    => $dataFlow,
                'keterangan' => "Semakan Bahagian (LULUS)",
                'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                'css_class' => "bg-primary",
            ]);
        }

        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'NOC telah disemak');
    }

    //proses: noc_2 (update)
    public function updateMohonUlasan(Request $request, $id)
    {
        $flow = DB::table('t_noc')
            ->select('t_kategori.flow')
            ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
            ->where('t_noc.id', '=', $id)
            ->first();

        $request->validate([
            'tarikh' => 'required',
        ]);

        // dd($flow);

        $semakan = Noc::find($id);
        if ($flow->flow == "flow2") {
            $semakan->tarikh_mohon_ulasan = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc = "noc_3";
            $semakan->save();
            NocLog::create([
                'noc_id' => $semakan->id,
                'status_noc'    => "noc_3",
                'keterangan' => "Permohonan Ulasan Bajet",
                'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                'css_class' => "bg-warning",
            ]);
        } else if ($flow->flow == "flow3") {
            if ($semakan->tarikh_dokumen_tambahan_bajet != NULL and $semakan->status_noc2 == 2) {
                $semakan->tarikh_mohon_ulasan = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
                $semakan->status_noc = "noc_3";
                $semakan->save();
                NocLog::create([
                    'noc_id' => $semakan->id,
                    'status_noc'    => "noc_3",
                    'keterangan' => "Permohonan Ulasan Bajet",
                    'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                    'css_class' => "bg-warning",
                ]);
            } else {
                $semakan->tarikh_mohon_ulasan = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
                $semakan->tarikh_mohon_ulasan_tek  = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
                $semakan->status_noc = "noc_3";
                $semakan->status_noc2 = "noc_4";
                $semakan->save();
                NocLog::create([
                    'noc_id' => $semakan->id,
                    'status_noc'    => "noc_3",
                    'keterangan' => "Permohonan Ulasan Bajet",
                    'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                    'css_class' => "bg-warning",
                ]);
                NocLog::create([
                    'noc_id' => $semakan->id,
                    'status_noc'    => "noc_4",
                    'keterangan' => "Permohonan Ulasan Teknikal",
                    'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                    'css_class' => "bg-info",
                ]);
            }
        }

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dipohon');
    }

    public function updateMohonUlasanBajet(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        // dd($flow);

        $semakan = Noc::find($id);

        // if ($semakan->tarikh_dokumen_tambahan_tek != NULL and $semakan->status_noc == 2) {
        $semakan->tarikh_mohon_ulasan  = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc = "noc_3";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_3",
            'keterangan' => "Permohonan Ulasan Bajet",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-warning",
        ]);
        // }

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dipohon');
    }

    public function updateMohonUlasanTeknikal(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        // dd($flow);

        $semakan = Noc::find($id);

        // if ($semakan->tarikh_dokumen_tambahan_tek != NULL and $semakan->status_noc2 == 2) {
        $semakan->tarikh_mohon_ulasan_tek  = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc2 = "noc_4";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_4",
            'keterangan' => "Permohonan Ulasan Teknikal",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-info",
        ]);
        // }

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dipohon');
    }

    //proses: noc_3 (update)
    public function updateSemakUlasanBajet(Request $request, $id)
    {
        $request->validate([
            'tarikh'         => 'required',
            'inputStatusSemak'     => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->status_semak_bajet = $request->inputStatusSemak;
        if ($request->inputStatusSemak == "dokumen-tambahan") {
            $semakan->tarikh_dokumen_tambahan_bajet = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc = "noc_18";
            $semakan->save();
            NocLog::create([
                'noc_id' => $semakan->id,
                'status_noc'    => "noc_18",
                'keterangan' => "Dokumen Tambahan Bajet",
                'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                'css_class' => "bg-danger",
            ]);
        } else if ($request->inputStatusSemak == "lulus-mohon") {
            $semakan->tarikh_semak_bajet = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc = "noc_5";
            $semakan->save();
            NocLog::create([
                'noc_id' => $semakan->id,
                'status_noc'    => "noc_5",
                'keterangan' => "Semakan BBP",
                'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                'css_class' => "bg-warning",
            ]);
        }

        return redirect()->route('noc.detail', $id)->with('success', 'Permohonan Ulasan telah disemak');
    }

    //proses: noc_3 (update)
    public function updateSemakUlasanTeknikal(Request $request, $id)
    {
        $request->validate([
            'tarikh'         => 'required',
            'inputStatusSemak'     => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->status_semak_tek = $request->inputStatusSemak;
        if ($request->inputStatusSemak == "dokumen-tambahan") {
            $semakan->tarikh_dokumen_tambahan_tek = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc2 = "noc_19";
            $semakan->save();
            NocLog::create([
                'noc_id' => $semakan->id,
                'status_noc'    => "noc_19",
                'keterangan' => "Dokumen Tambahan Teknikal",
                'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                'css_class' => "bg-danger",
            ]);
        } else if ($request->inputStatusSemak == "lulus-mohon") {
            $semakan->tarikh_semak_tek = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc2 = "noc_6";
            $semakan->save();
            NocLog::create([
                'noc_id' => $semakan->id,
                'status_noc'    => "noc_6",
                'keterangan' => "Semakan BPN",
                'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
                'css_class' => "bg-info",
            ]);
        }

        return redirect()->route('noc.detail', $id)->with('success', 'Permohonan Ulasan telah disemak');
    }

    //Proses: noc_4
    public function updateSediaUlasanBajet(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_sedia_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc             = "noc_7";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_7",
            'keterangan' => "Penyediaan Ulasan Bajet",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-warning",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan sedang disediakan');
    }

    //Proses: noc_4
    public function updateSediaUlasanTeknikal(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_sedia_ulasan_tek    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc2             = "noc_8";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_8",
            'keterangan' => "Penyediaan Ulasan Teknikal",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-info",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan sedang disediakan');
    }

    //proses: noc_5
    public function updateHantarUlasanBajet(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_hantar_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc            = "noc_9";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_9",
            'keterangan' => "Pengemukaan Ulasan Bajet",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-warning",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dihantar');
    }

    //proses: noc_5
    public function updateHantarUlasanTeknikal(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_hantar_ulasan_tek    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc2            = "noc_10";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_10",
            'keterangan' => "Pengemukaan Ulasan Teknikal",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-info",
        ]);
        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dihantar');
    }

    //proses: noc_6
    public function updateSediaMemo(Request $request, $id)
    {
        $request->validate([
            'tarikh'             => 'required',
            'pengurusan_tinggi'    => 'required',
        ]);

        $semakan                                = Noc::find($id);
        $semakan->tarikh_sedia_memo_kelulusan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->pengurusan_tinggi                = $request->pengurusan_tinggi;
        $semakan->status_noc                    = "noc_11";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_11",
            'keterangan' => "Penyediaan Memo",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-primary",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Memo kelulusan sedang disediakan');
    }

    //proses: noc_7 (update)
    public function updateHantarMemo(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                                = Noc::find($id);
        $semakan->tarikh_hantar_memo_kelulusan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc                    = "noc_12";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_12",
            'keterangan' => "Penghantaran Memo",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-primary",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Memo kelulusan telah dihantar');
    }

    //proses: noc_8
    public function updateTerimaMemo(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                        = Noc::find($id);
        $semakan->tarikh_kelulusan_pt    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc            = "noc_13";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_13",
            'keterangan' => "Terima Memo",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-primary",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Memo kelulusan telah diterima');
    }

    //proses: noc_9
    public function updateSediaSurat(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_sedia_surat = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc = "noc_14";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_14",
            'keterangan' => "Penyediaan Surat",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-primary",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Surat kelulusan sedang disediakan');
    }

    //proses: noc_10
    public function updateHantarSurat(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_hantar_surat_lulus = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc = "noc_15";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_15",
            'keterangan' => "Penghantaran Surat",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-primary",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Surat kelulusan rasmi telah dihantar');
    }

    //proses: noc_11
    public function updateMohonModul(Request $request, $id)
    {

        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_mohon_modul    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc            = "noc_16";
        $semakan->save();
        NocLog::create([
            'noc_id' => $semakan->id,
            'status_noc'    => "noc_16",
            'keterangan' => "Mohon Modul NOC MyProjek (Selesai)",
            'tarikh'    => Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d'),
            'css_class' => "bg-primary",
        ]);

        return redirect()->route('noc.detail', $id)->with('success', 'Modul NOC MyProjek telah dipohon');
    }

    public function carianNoc(Request $request, $id)
    {
    }

    public function sendNocMessage($id)
    {
        $dataNoc = Noc::find($id);

        $mailData = [
            'tajuk' => $tajuk,
            'klasifikasi' => $klasifikasi,
            'bahagian' => $bahagian,
            'urusan' => $urusan,
            'tarikh' => $tarikh
        ];

        Mail::to($sender)->send(new EmailNOC($mailData));

        dd("Email berjaya!");

    }
}
