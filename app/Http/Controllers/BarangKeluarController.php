<?php

namespace App\Http\Controllers;

use App\BarangKeluar;
use App\Barang;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Data Barang Keluar";
        $judul = array('title' => 'PESO Printing | Data Barang Keluar');
        $barangkeluars = BarangKeluar::paginate(10);
        $barangs = Barang::all();
        return view('barang_keluar.index', compact('judul', 'barangkeluars', 'title', 'barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $judul = array('title' => 'Data Barang Keluar');
        $title = "PESO Printing | Input Barang Keluar";
        $barangs = Barang::all();
        return view('barang_keluar.create', compact('judul', 'title', 'barangs'));
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
        $this->validate($request , [
            'barangs_id' => 'required',
            'customer' => 'required',
            'qty' => 'required',
            'tanggal' => 'required'
        ]);

        BarangKeluar::create($request->all());

        $barangs = Barang::findOrFail($request->barangs_id);
        $barangs->qty -= $request->qty;
        $barangs->save();

        return redirect('barang_keluar')->with('success','Barang Keluar Telah Diinput !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = "Detail Barang Keluar";
        $barangkeluars = BarangKeluar::findOrFail($id);
        $barangs = Barang::all();
        return view('barang_keluar.show', compact('title', 'barangs', 'barangkeluars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = "Ubah Barang Keluar";
        $barangkeluars = BarangKeluar::findOrFail($id);
        $barangs = Barang::all();
        return view('barang_keluar.edit', compact('title', 'barangs', 'barangkeluars'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request , [
            'barangs_id' => 'required',
            'customer' => 'required'
        ]);

        $barangkeluars_data = [
            'barangs_id' => $request->barangs_id,
            'customer' => $request->customer,
            'tanggal' => $request->tanggal,
            'keterangan' => $request->keterangan
        ];

        BarangKeluar::whereId($id)->update($barangkeluars_data);

        return redirect()->route('barang_keluar.index')->with('success','Barang Keluar Telah DIUBAH !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangKeluar  $barangKeluar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barangkeluars = BarangKeluar::findorfail($id);
        $barangkeluars->delete();

        return redirect()->back()->with('success','Barang Keluar Berhasil Dihapus');
    }
}
