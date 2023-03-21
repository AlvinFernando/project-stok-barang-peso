<?php

namespace App\Http\Controllers;

use App\BarangMasuk;
use App\Barang;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Data Barang Masuk";
        $judul = array('title' => 'Data Barang Masuk');
        $barangmasuks = BarangMasuk::paginate(10);
        $barangs = Barang::all();
        return view('barang_masuk.index', compact('judul', 'barangmasuks', 'title', 'barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $judul = array('title' => 'Data Barang Masuk');
        $title = "Input Barang Masuk";
        $barangs = Barang::all();
        return view('barang_masuk.create', compact('judul', 'title', 'barangs'));
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
            'supplier' => 'required',
            'qty' => 'required',
            'tanggal' => 'required'
        ]);

        BarangMasuk::create($request->all());

        $barangs = Barang::findOrFail($request->barangs_id);
        $barangs->qty += $request->qty;
        $barangs->save();

        return redirect('barang_masuk')->with('success','Barang Masuk Telah Diinput !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = "Ubah Barang Masuk";
        $barangmasuks = BarangMasuk::findOrFail($id);
        $barangs = Barang::all();
        return view('barang_masuk.show', compact('title', 'barangs', 'barangmasuks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = "Ubah Barang Masuk";
        $barangmasuks = BarangMasuk::findOrFail($id);
        $barangs = Barang::all();
        return view('barang_masuk.edit', compact('title', 'barangs', 'barangmasuks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request , [
            'barangs_id' => 'required',
            'supplier' => 'required'
        ]);

        $barangmasuks_data = [
            'barangs_id' => $request->barangs_id,
            'supplier' => $request->supplier,
            'tanggal' => $request->tanggal,
        ];

        BarangMasuk::whereId($id)->update($barangmasuks_data);

        return redirect()->route('barang_masuk.index')->with('success','Barang Masuk Telah DIUBAH !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangMasuk  $barangMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barangmasuks = BarangMasuk::findorfail($id);
        $barangmasuks->delete();

        return redirect()->back()->with('success','Barang Masuk Berhasil Dihapus');
    }
}
