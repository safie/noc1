<?php

namespace App\Http\Controllers;

use App\Models\Kementerian;
use Illuminate\Http\Request;

class KementerianController extends Controller
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
        $kementerian = Kementerian::all();
        $view_data['kementerian'] = $kementerian;
        return view('page.kementerian.index')->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data['tajuk_page'] = 'Tambah Kementerian';
        // dd($view_data);
        return view('page.kementerian.create')->with($view_data);
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
            'inputNamaKementerian' => 'required',
            'inputSingkatan' => 'required',

        ]);

        $request_data = $request->all();

        Kementerian::create([
            'nama_jabatan'       => $request_data['inputNamaKementerian'],
            'sgktn_jabatan'    => $request_data['inputSingkatan']
        ]);

        return redirect()->route('kementerian.index')->with('success', 'Kementerian/Jabatan berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kementerian  $kementerian
     * @return \Illuminate\Http\Response
     */
    public function show(Kementerian $kementerian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kementerian  $kementerian
     * @return \Illuminate\Http\Response
     */
    public function edit(Kementerian $kementerian)
    {
        return view('page.kementerian.edit', compact('kementerian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kementerian  $kementerian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kementerian $kementerian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kementerian  $kementerian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kementerian $kementerian)
    {
        //
    }
}
