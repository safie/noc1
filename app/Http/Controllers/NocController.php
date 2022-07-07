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
                    't_status.nama_status',
                    't_kategori.nama_kat',
                )
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
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
                    't_status.nama_status',
                    't_kategori.nama_kat',
                )
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
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
        $tahun = Carbon::now()->year;
        $bulan = Carbon::now()->month;


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
            'noc_id'    => "noc/" . $tahun . "/" . $bulan . "/" . $request_data['inputKlasifikasi'] . "/",
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
                    't_status.nama_status',
                    't_kategori.nama_kat',
                )
                ->where('bahagian', '=', Auth::user()->bahagian)
                ->whereIn('status_noc', ['noc_1', 'noc_2', 'noc_7', 'noc_8', 'noc_9', 'noc_10', 'noc_11', 'noc_12', 'noc_13', 'noc_14'])
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->get();

        } else if ((Auth::user()->peranan == 3) OR (Auth::user()->peranan == 4)) {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    't_status.nama_status',
                    't_kategori.nama_kat',
                )
                ->whereIn('status_noc', ['noc_3', 'noc_4', 'noc_5'])
                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->get();

        } else {
            $noc = DB::table('t_noc')
                ->select(
                    't_noc.*',
                    't_kementerian.nama_jabatan',
                    't_kementerian.sgktn_jabatan',
                    't_bahagian.nama_bhgn',
                    't_bahagian.sgktn_bhgn',
                    't_status.nama_status',
                    't_kategori.nama_kat',
                )

                ->leftJoin('t_kementerian', 't_kementerian.id', '=', 't_noc.kementerian')
                ->leftJoin('t_bahagian', 't_bahagian.id', '=', 't_noc.bahagian')
                ->leftJoin('t_status', 't_status.id_status', '=', 't_noc.status_noc')
                ->leftJoin('t_kategori', 't_kategori.kod', '=', 't_noc.klasifikasi')
                ->get();
        }
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

    //proses: noc_1
    public function editSemak(Noc $noc)
    {
        $form     = "noc_1";
        $tajuk     = "Semakan NOC";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateSemak(Request $request, $id)
    {

        $flow = DB::table('t_noc')
            ->select('t_kategori.flow')
            ->leftJoin('t_kategori','t_kategori.kod','=','t_noc.klasifikasi')
            ->where('t_noc.id','=',$id)
            ->first();

        if ($flow->flow == 'flow1') {
            $dataFlow = "noc_7";
        } else {
            $dataFlow = "noc_2";
        }

        $request->validate([
            'tarikh'         => 'required',
            'inputStatusSemak'     => 'required',
        ]);

        // dd($dataFlow);

        $semakan = Noc::find($id);

        if($request->inputStatusSemak == "dokumen-tambahan"){
            $semakan->tarikh_dokumen_tambahan = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc         = "noc_17";
            $semakan->status_semak        = $request->inputStatusSemak;
        } else if($request->inputStatusSemak == "lulus"){
            $semakan->tarikh_semak = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
            $semakan->status_noc         = $dataFlow;
            $semakan->status_semak        = $request->inputStatusSemak;
        }

        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'NOC telah disemak');
    }

    //proses: noc_2 (update)
    public function editMohonUlasanBajet(Noc $noc)
    {
        $form   = "noc_2";
        $tajuk  = "Permohonan Ulasan Bajet / Teknikal";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateMohonUlasanBajet(Request $request, $id)
    {
        $request->validate([
            'tarikh'         => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_mohon_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc             = "noc_3";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dipohon');
    }

    //proses: noc_3 (update)
    public function editMohonUlasanTek(Noc $noc)
    {
        $form   = "noc_3";
        $tajuk  = "Permohonan Ulasan Teknikal";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateMohonUlasanTek(Request $request, $id)
    {
        $request->validate([
            'tarikh'         => 'required',
        ]);

        $semakan = Noc::find($id);
        $semakan->tarikh_mohon_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc             = "noc_4";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dipohon');
    }


    //proses: noc_3
    public function editSemakUlasan(Noc $noc)
    {
        $form     = "noc_3";
        $tajuk     = "Semakan Permohonan Ulasan"; //Bajet@Teknikal

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateSemakUlasan(Request $request, $id)
    {
        $request->validate([
            'tarikh'         => 'required',
            'inputStatusSemak'     => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_mohon_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_semak_ulasan    = $request->inputStatusSemak;
        $semakan->status_noc             = "noc_4";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Permohonan Ulasan telah disemak');
    }


    //Proses: noc_4
    public function editSediaUlasan(Noc $noc)
    {
        $form    = "noc_3";
        $tajuk    = "Penyediaan Ulasan"; //Bajet@Teknikal

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateSediaUlasan(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_sedia_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc             = "noc_5";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan sedang disediakan');
    }

    //proses: noc_5
    public function editHantarUlasan(Noc $noc)
    {
        $form     = "noc_5";
        $tajuk     = "Penghantaran Ulasan"; //Bajet@Teknikal

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateHantarUlasan(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_hantar_ulasan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc            = "noc_6";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Ulasan telah dihantar');
    }

    //proses: noc_6
    public function editSediaMemo(Noc $noc)
    {
        $form    = "noc_6";
        $tajuk    = "Penyediaan Memo Kelulusan";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateSediaMemo(Request $request, $id)
    {
        $request->validate([
            'tarikh'             => 'required',
            'pengurusan_tinggi'    => 'required',
        ]);

        $semakan                                = Noc::find($id);
        $semakan->tarikh_sedia_memo_kelulusan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->pengurusan_tinggi                = $request->pengurusan_tinggi;
        $semakan->status_noc                    = "noc_7";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Memo kelulusan sedang disediakan');
    }

    //proses: noc_7 (update)
    public function editHantarMemo(Noc $noc)
    {
        $form    = "noc_7";
        $tajuk    = "Penghantaran Memo Kelulusan Kepada Pejabat KP/TKP";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateHantarMemo(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                                = Noc::find($id);
        $semakan->tarikh_hantar_memo_kelulusan    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc                    = "noc_8";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Memo kelulusan telah dihantar');
    }

    //proses: noc_8
    public function editTerimaMemo(Noc $noc)
    {
        $form    = "noc_8";
        $tajuk    = "Penerimaan Memo Kelulusan Daripada Pejabat KP/TKP";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateTerimaMemo(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                        = Noc::find($id);
        $semakan->tarikh_kelulusan_pt    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc            = "noc_9";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Memo kelulusan telah diterima');
    }

    //proses: noc_9
    public function editSediaSurat(Noc $noc)
    {
        $form    = "noc_9";
        $tajuk    = "Penyediaan Surat Kelulusan";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateSediaSurat(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_sedia_surat    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc            = "noc_10";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Surat kelulusan sedang disediakan');
    }

    //proses: noc_10
    public function editHantarSurat(Noc $noc)
    {
        $form    = "noc_10";
        $tajuk    = "Penhantaran Surat Kelulusan Kepada Kementerian";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateHantarSurat(Request $request, $id)
    {
        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                             = Noc::find($id);
        $semakan->tarikh_hantar_surat_lulus    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc                = "noc_11";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Surat kelulusan rasmi telah dihantar');
    }


    //proses: noc_11
    public function editMohonModul(Noc $noc)
    {
        $form    = "noc_11";
        $tajuk    = "Permohonan Modul NOC MyProjek oleh Kementerian";

        return view('page.noc.edit', compact('noc', 'form', 'tajuk'));
    }

    public function updateMohonModul(Request $request, $id)
    {

        $request->validate([
            'tarikh' => 'required',
        ]);

        $semakan                         = Noc::find($id);
        $semakan->tarikh_mohon_modul    = Carbon::createFromFormat('d/m/Y', $request->tarikh)->format('Y-m-d');
        $semakan->status_noc            = "noc_12";
        $semakan->save();

        return redirect()->route('noc.detail', $id)->with('success', 'Modul NOC MyProjek telah dipohon');
    }
}
