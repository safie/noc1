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
            // 'inputBahagian' => 'required',
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
            // 'bahagian'    => $request_data['inputBahagian'],
            'bahagian'    => Auth::user()->bahagian,
            'klasifikasi'    => $request_data['inputKlasifikasi'],
            'kementerian'    => $request_data['inputJabatan'],
            'tarikh_submit'    => Carbon::now()->format('Y-m-d'),
            'status_noc'    => "noc_1",
            'noc_id'
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
        return redirect()->route('noc.index')->with('success', 'NOC berjaya dipadam');
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

    public function editSemak(Noc $noc)
    {
        $form = "noc_1";
        $tajuk = "Semakan NOC baharu";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function editSemakUlasan(Noc $noc)
    {
        $form = "noc_2";
        $tajuk = "Semakan Permohonan Ulasan";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }
    public function editSediaUlasan(Noc $noc)
    {
        $form = "noc_3";
        $tajuk = "Penyediaan Ulasan NOC";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }
    public function editHantarUlasan(Noc $noc)
    {
        $form = "noc_4";
        $tajuk = "Semakan Permohonan Ulasan";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function editSediaMemo(Noc $noc)
    {
        $form = "noc_5";
        $tajuk = "Penyediaan Memo Kelulusan NOC";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function editTerimaMemo(Noc $noc)
    {
        $form = "noc_6";
        $tajuk = "Penyediaan Memo Kelulusan NOC";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function editSediaSurat(Noc $noc)
    {
        $form = "noc_7";
        $tajuk = "Penyediaan Surat Kelulusan Rasmi";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function editHantarSurat(Noc $noc)
    {
        $form = "noc_8";
        $tajuk = "Penhantaran Surat Kelulusan Rasmi Kepada Kementerian/Jabatan";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function editMohonModul(Noc $noc)
    {
        $form = "noc_9";
        $tajuk = "Permohonan Rasmi NOC di MyProjek";
        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateSemak(Request $request, $id)
    {
        $request->validate([
            'tarikhSemak' => 'required',
            'inputStatusSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_semak     = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_semak    = $request->inputStatusSemak;
        $semakan->status_noc = "noc_2";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateSemakUlasan(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
            'inputStatusSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_mohon_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_semak_ulasan    = $request->inputStatusSemak;
        $semakan->status_noc = "noc_3";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateSediaUlasan(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_sedia_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_noc = "noc_4";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateHantarUlasan(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_hantar_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_noc = "noc_5";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateSediaMemo(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
            'pengurusan_tinggi' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_sedia_memo_kelulusan = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->pengurusan_tinggi    = $request->pengurusan_tinggi;
        $semakan->status_noc = "noc_6";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateTerimaMemo(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_kelulusan_pt = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_noc = "noc_7";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateSediaSurat(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_sedia_surat = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_noc = "noc_8";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateHantarSurat(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_hantar_surat_lulus = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_noc = "noc_9";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }

    public function updateMohonModul(Request $request, $id)
    {

        $request->validate([
            'tarikhSemak' => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_mohon_modul = Carbon::createFromFormat('d/m/Y', $request->tarikhSemak)->format('Y-m-d');
        $semakan->status_noc = "noc_10";
        $semakan->save();

        return redirect()->route('noc.index')->with('success', 'NOC baharu telah disemak');
    }
}
