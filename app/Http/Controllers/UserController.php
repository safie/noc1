<?php

namespace App\Http\Controllers;

use App\Models\Bahagian;
use App\Models\Peranan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengguna = User::all();
        $view_data['pengguna'] = $pengguna;

        return view('page.pengguna.index')
        ->with($view_data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bahagian = Bahagian::get(['id','nama_bhgn','sgktn_bhgn']);
        $peranan = Peranan::get(['peranan', 'id']);
        $data1['peranan'] = $peranan;
        $data2['tajuk_page'] = 'Tambah Pengguna';
        $data3['bahagian'] = $bahagian;
        // dd($view_data);

        return view('page.pengguna.create')
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
            'inputNama'                     => ['required','string', 'max:255'],
            'email'                         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'inputKatalaluan'               => ['required', 'string', 'min:8', 'confirmed'],
            'inputKatalaluan_confirmation'  => ['required', 'string', 'min:8'],
            'inputPeranan'                  => 'required',
            'inputBahagian'                 => 'required',

        ]);

        $request_data = $request->all();

        // dd($request_data);

        User::create([
            'name'      => $request_data['inputNama'],
            'email'     => $request_data['email'],
            'peranan'   => $request_data['inputPeranan'],
            'bahagian'  => $request_data['inputBahagian'],
            'password'  => Hash::make($request_data['inputKatalaluan']),
        ]);

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berjaya disimpan.');
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
        $user = User::find($id);
        $bahagian = Bahagian::get(['id', 'nama_bhgn', 'sgktn_bhgn']);
        $peranan = Peranan::get(['peranan', 'id']);
        $data1['peranan'] = $peranan;
        $data2['tajuk_page'] = 'Edit Pengguna';
        $data3['bahagian'] = $bahagian;
        // dd($user);
        return view('page.pengguna.edit',compact('user'))
        // ->with($user)
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
            'inputNama'                     => ['required','string', 'max:255'],
            'email'                         => ['required', 'string', 'email', 'max:255'],
            // 'inputKatalaluan'               => ['string', 'min:8', 'confirmed'],
            // 'inputKatalaluan_confirmation'  => ['string', 'min:8'],
            'inputPeranan'                  => 'required',
            'inputBahagian'                 => 'required',

        ]);
        $user = User::find($id);
        $user->name       = $request->inputNama;
        $user->email      = $request->email;
        $user->peranan    = $request->inputPeranan;
        $user->bahagian   = $request->inputBahagian;
        // $user->password   = Hash::make($request['inputKatalaluan']);
        $user->save();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berjaya diedit.');
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
