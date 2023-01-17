<?php

namespace App\Http\Controllers;

use App\Models\Bahagian;
use App\Models\Peranan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeUser;


class UserController extends Controller
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
        // $pengguna = DB::table('users')
        //         ->select('users.*','t_bahagian.nama_bhgn','t_bahagian.sgktn_bhgn','t_peranan.peranan as nama_peranan')
        //         ->leftJoin('t_bahagian','t_bahagian.id','=','users.bahagian')
        //         ->leftJoin('t_peranan','t_peranan.id','=','users.peranan')
        //         ->get();
        // // $pengguna = User::all();
        // $data1['pengguna'] = $pengguna;

        $pengguna = User::paginate(10);

        return view('page.pengguna.index')->with('pengguna', $pengguna);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bahagian = Bahagian::get(['id', 'nama_bhgn', 'sgktn_bhgn']);
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
            'inputNama'                     => ['required', 'string', 'max:255'],
            'email'                         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'inputKatalaluan'               => ['required', 'string', 'min:8', 'confirmed'],
            'inputKatalaluan_confirmation'  => ['required', 'string', 'min:8'],
            'inputPeranan'                  => 'required',
            'inputBahagian'                 => 'required',

        ]);

        // $request_data = $request->all();

        // dd($request_data);

        // $dataUser = User::create([
        //     'name'      => $request_data['inputNama'],
        //     'email'     => $request_data['email'],
        //     'peranan'   => $request_data['inputPeranan'],
        //     'bahagian'  => $request_data['inputBahagian'],
        //     'password'  => Hash::make($request_data['inputKatalaluan']),
        // ]);

        $dataStore = new User();

        $dataStore->name = $request->inputNama;
        $dataStore->email = $request->email;
        $dataStore->peranan = $request->inputPeranan;
        $dataStore->bahagian = $request->inputBahagian;
        $dataStore->password = Hash::make($request->inputKatalaluan);
        $dataStore->save();

        // return $dataStore->getbahagian;

        // dd($mailData);

        Mail::to($dataStore->email)->send(new WelcomeUser($dataStore, $request->inputKatalaluan));

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
        $user = db::table('users')
            ->select('users.*', 't_bahagian.nama_bhgn', 't_bahagian.sgktn_bhgn', 't_peranan.peranan')
            ->leftJoin('t_bahagian', 't_bahagian.id', '=', 'users.bahagian')
            ->leftJoin('t_peranan', 't_peranan.id', '=', 'users.peranan')
            ->where('users.id', '=', $id)
            ->first();

        $data1['user'] = $user;

        // dd($data1);
        return view('page.pengguna.show')
            ->with($data1);
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
        return view('page.pengguna.edit', compact('user'))
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
            'inputNama'                     => ['required', 'string', 'max:255'],
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
        $user->password   = Hash::make($request['inputKatalaluan']);
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
        // dd($id);
        DB::table('users')->where('users.id', '=', $id)->delete();
        // $user->delete();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna berjaya dipadam');
    }
}
