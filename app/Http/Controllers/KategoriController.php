<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
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
        $kategori = Kategori::all();
        $view_data['kategori'] = $kategori;
        return view('page.kategori.index')->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data['tajuk_page'] = 'Tambah Kategori';
        // dd($view_data);
        return view('page.kategori.create')->with($view_data);
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
            'inputNamaKategori' => 'required',
            'inputKod' => 'required',
            'inputMyProjek' => 'required',
            'inputFlow' => 'required',

        ]);

        $request_data = $request->all();

        Kategori::create([
            'nama_kat'      => $request_data['inputNamaKategori'],
            'kod'           => $request_data['inputKod'],
            'kod_myprojek'  => $request_data['inputMyProjek'],
            'flow'          => $request_data['inputFlow'],
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('page.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //check data
        $request->validate([
            'inputNamaKategori' => 'required',
            'inputKod' => 'required',
            'inputMyProjek' => 'required',
            'inputFlow' => 'required',
        ]);

        $kategori = Kategori::find($id);
        $kategori->nama_kat       = $request->inputNamaKategori;
        $kategori->kod            = $request->inputKod;
        $kategori->kod_myprojek   = $request->inputMyProjek;
        $kategori->flow   = $request->inputFlow;
        $kategori->save();

        return redirect()->route('kategori.index')->with('success', 'Kategori berjaya diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berjaya dipadam');
    }
}
