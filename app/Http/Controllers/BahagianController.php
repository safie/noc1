<?php

namespace App\Http\Controllers;

use App\Models\Bahagian;
use Illuminate\Http\Request;

class BahagianController extends Controller
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
        $bahagian = Bahagian::paginate(10);
        $view_data['bahagian'] = $bahagian;
        return view('page.bahagian.index')->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data['tajuk_page'] = 'Tambah Bahagian';
        // dd($view_data);
        return view('page.bahagian.create')->with($view_data);
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
            'inputNamaBahagian' => 'required',
            'inputSingkatan' => 'required',

        ]);

        $request_data = $request->all();

        Bahagian::create([
            'nama_bhgn'       => $request_data['inputNamaBahagian'],
            'sgktn_bhgn'    => $request_data['inputSingkatan']
        ]);

        return redirect()->route('bahagian.index')->with('success', 'Bahagian berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bahagian  $bahagian
     * @return \Illuminate\Http\Response
     */
    public function show(Bahagian $bahagian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bahagian  $bahagian
     * @return \Illuminate\Http\Response
     */
    public function edit(Bahagian $bahagian)
    {
        return view('page.bahagian.edit', compact('bahagian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bahagian  $bahagian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //check data
        $request->validate([
            'inputNamaBahagian' => 'required',
            'inputSingkatan' => 'required',

        ]);
        $bahagian = Bahagian::find($id);
        $bahagian->nama_bhgn   = $request->inputNamaBahagian;
        $bahagian->sgktn_bhgn  = $request->inputSingkatan;

        $bahagian->save();

        return redirect()->route('bahagian.index')->with('success', 'Bahagian berjaya diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bahagian  $bahagian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bahagian $bahagian)
    {
        $bahagian->delete();
        return redirect()->route('bahagian.index')->with('success', 'Bahagian berjaya dipadam');
    }
}
