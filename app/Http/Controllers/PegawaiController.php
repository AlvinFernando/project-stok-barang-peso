<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Data Pegawai";
        $pegawais = Pegawai::orderBy('updated_at', 'DESC')->paginate(5);
        return view('pegawai.index', compact('pegawais', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Tambah Data Pegawai";
        return view('pegawai.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'email' => 'required|email|unique:users'
        ]);


        //insert ke table user
        $user = new \App\User;
        $user->level = 'pegawai';
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add([ 'user_id' => $user->id ]);
        Pegawai::create($request->all());

        return redirect('pegawai')->with('success','Data Pegawai Telah Diinput !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = "Pegawai";
        $pegawais = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('title', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        //
        $this->validate($request , [
            'nama' => 'required|max:100',
            'jabatan' => 'required'
        ]);

        $pegawais_data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan
        ];

        $pegawai->update($pegawais_data);

        return redirect()->route('pegawai.index')->with('success','Data Pegawai Telah DIUBAH !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pegawais = Pegawai::findorfail($id);
        $pegawais->delete();

        return redirect()->back()->with('success','Pegawai Berhasil Dihapus');
    }
}
