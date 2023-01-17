<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = Status::paginate(10);
        $view_data['status'] = $status;
        return view('page.status.index')->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view_data['tajuk_page'] = 'Tambah Status';
        return view('page.status.create')->with($view_data);
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
            'inputID' => 'required',
            'inputNama' => 'required',

        ]);

        $request_data = $request->all();

        Status::create([
            'id_status'       => $request_data['inputID'],
            'nama_status'    => $request_data['inputNama']
        ]);

        return redirect()->route('status.index')->with('success', 'Status berjaya disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('page.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //check data
        $request->validate([
            'inputID' => 'required',
            'inputNama' => 'required',

        ]);

        $status = Status::find($id);
        $status->id_status     = $request->inputID;
        $status->nama_status    = $request->inputNama;
        $status->save();

        return redirect()->route('status.index')->with('success', 'Status berjaya diedit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('status.index')->with('success', 'Status berjaya dipadam');
    }
}
