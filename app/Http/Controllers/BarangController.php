<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "PESO Printing | Data Barang";
        $judul = array('title' => 'Data Barang');
        $barangs = Barang::paginate(10);
        return view('barang.index', compact('judul', 'barangs', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $judul = array('title' => 'Data Barang');
        $title = "PESO Printing | Tambah Data Barang";
        return view('barang.create', compact('judul', 'title'));
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
        // dd($request->all());
        $this->validate($request , [
            'kode_barang' => 'required',
            'item_description' => 'required',
            'unit' => 'required',
        ]);

        Barang::create([
            'kode_barang' => $request->kode_barang,
            'item_description' => $request->item_description,
            'unit' => $request->unit,
            'qty' => $request->qty
        ]);

        return redirect('barang')->with('success','Data Barang Telah Diinput !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $barangs = Barang::findOrFail($id);
        $judul = array('title' => 'Data Barang');
        $title = "Detail Barang";
        return view('barang.show', compact('barangs','judul', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $judul = array('title' => 'Ubah Data Barang');
        $title = "Ubah Data Barang";
        $barangs = Barang::findOrFail($id);
        return view('barang.edit', compact('judul', 'title', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
        $this->validate($request , [
            'kode_barang' => 'required',
            'item_description' => 'required',
            'unit' => 'required',
        ]);

        $barangs_data = [
            'kode_barang' => $request->kode_barang,
            'item_description' => $request->item_description,
            'unit' => $request->unit,
            'qty' => $request->qty
        ];

        $barang->update($barangs_data);

        return redirect()->route('barang.index')->with('success','Data Barang Telah DIUBAH !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $barangs = Barang::findorfail($id);
        $barangs->delete();

        return redirect()->back()->with('success','Barang Berhasil Dihapus');
    }

}
