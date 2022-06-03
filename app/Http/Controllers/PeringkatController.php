<?php

namespace App\Http\Controllers;

use App\Models\Peringkat;
use Illuminate\Http\Request;

class PeringkatController extends Controller
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
        $peringkat = Peringkat::all();
        $view_data['peringkat'] = $peringkat;
        return view('page.peringkat.index')->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data['tajuk_page'] = 'Tambah Peringkat';
        // dd($view_data);
        return view('page.peringkat.create')->with($view_data);
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
            'inputNamaPeringkat' => 'required',
            'orderPeringkat' => 'required',

        ]);

        $request_data = $request->all();

        Peringkat::create([
            'nama_peringkat'    => $request_data['inputNamaPeringkat'],
            'order'             => $request_data['orderPeringkat']
        ]);

        return redirect()->route('peringkat.index')->with('success', 'Peringkat berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function show(Peringkat $peringkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Peringkat $peringkat)
    {
        return view('page.peringkat.edit', compact('peringkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //check data
        $request->validate([
            'inputNamaPeringkat' => 'required',
            'orderPeringkat' => 'required',
        ]);

        $peranan = Peringkat::find($id);
        $peranan->nama_peringkat     = $request->inputNamaPeringkat;
        $peranan->order    = $request->orderPeringkat;
        $peranan->save();

        return redirect()->route('peringkat.index')->with('success', 'Peringkat berjaya diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peringkat  $peringkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peringkat $peringkat)
    {
        $peringkat->delete();
        return redirect()->route('peringkat.index')->with('success', 'Peringkat berjaya dipadam');
    }
}
