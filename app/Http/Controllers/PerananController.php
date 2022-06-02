<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peranan;

class PerananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peranan = Peranan::all();
        $view_data['peranan'] = $peranan;
        return view('page.peranan.index')->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data['tajuk_page'] = 'Tambah Peranan';
        // dd($view_data);
        return view('page.peranan.create')->with($view_data);
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
            'postNamaPeranan'       => 'required',
            'postKeteranganPeranan' => 'required',

        ]);

        $request_data = $request->all();

        Peranan::create([
            'peranan'       => $request_data['postNamaPeranan'],
            'keterangan'    => $request_data['postKeteranganPeranan']
        ]);

        return redirect()->route('peranan.index')->with('success', 'Peranan berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Peranan $peranan)
    {
        return view('page.peranan.show', compact('peranan'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Peranan $peranan)
    {
        // dd($peranan);
        return view('page.peranan.edit', compact('peranan'));
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
            'postNamaPeranan'       => 'required',
            'postKeteranganPeranan' => 'required',

        ]);

        $peranan = Peranan::find($id);
        $peranan->peranan       = $request->postNamaPeranan;
        $peranan->keterangan    = $request->postKeteranganPeranan;
        $peranan->save();

        return redirect()->route('peranan.index')->with('success', 'Peranan berjaya diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peranan $peranan)
    {
        $peranan->delete();
        return redirect()->route('peranan.index')->with('success', 'Peranan berjaya dipadam');
    }
}
