<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noc;
use App\Models\Bahagian;
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
        $noc = Noc::all();
        $data1['noc'] = $noc;
        return view('page.noc.index')
            ->with($data1);
    }

    public function tindakan()
    {
        $noc = DB::table('t_noc')->where('bahagian', '=', Auth::user()->bahagian)->get();
        $data1['noc'] = $noc;
        return view('page.noc.tindakan')
            ->with($data1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kementerian = Kementerian::get(['id', 'nama_jabatan', 'sgktn_jabatan']);
        $bahagian = Bahagian::get(['id', 'nama_bhgn', 'sgktn_bhgn']);
        $data1['bahagian'] = $bahagian;
        $data2['kementerian'] = $kementerian;
        $data3['tajuk_page'] = 'Permohonan NOC baharu';
        // dd($view_data);
        return view('page.noc.create')
            ->with($data1)
            ->with($data2)
            ->with($data3);
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
            'kementerian'    => $request_data['inputJabatan'],
            'status_noc'    => "noc_1",
            'tarikh_submit'    => Carbon::now()->format('Y-m-d')
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
    public function destroy($id)
    {
        //
    }
}
