<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\InvoiceBarang;
use App\Pegawai;
use PDF;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Data Invoice";
        $judul = array('title' => 'Data Invoice');
        $invoices = Invoice::orderBy('created_at', 'desc')->paginate(5);;
        $pegawais = Pegawai::all();
        return view('invoice.index', compact('judul', 'invoices', 'title', 'pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $judul = array('title' => 'Invoice');
        $title = "Tambah Invoices";
        $pegawais = Pegawai::all();
        return view('invoice.create', compact('judul', 'title', 'pegawais'));
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
        //dd($request->all());
        $invoices = Invoice::create([
            'no_inv' => $request->no_inv,
            'pegawais_id' => $request->pegawais_id,
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'customer' => $request->customer,
            'telp' => $request->telp,
            'total' => $request->total,
            'terbilang' => $request->terbilang,
        ]);



        // foreach ($invoices_barang as $key => $value) {
        //     $datas2 = array([
        //                 'invoices_id' => $invoices->id,
        //                 'description'=> $value->description[$key],
        //                 'qty' => $value->qty[$key],
        //                 'unit'=> $value->unit[$key],
        //                 'harga' => $value->harga[$key],
        //                 'jumlah'=> $value->jumlah[$key],
        //             ]);
        //             InvoiceBarang::create($datas2);
        // }

        if(count($request->description) > 1){
             foreach($request->description as $item => $value){
                 $datas2 = array(
                     'invoices_id' => $invoices->id,
                     'description'=> $request->description[$item],
                     'qty' => $request->qty[$item],
                     'unit'=> $request->unit[$item],
                     'harga' => $request->harga[$item],
                     'jumlah'=> $request->jumlah[$item],
                 );
                 InvoiceBarang::create($datas2);
             }
         }

        return redirect('invoice')->with('success','Invoice Telah Diinput !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $invoices = Invoice::findOrFail($id);
        $judul = array('title' => 'Detail Invoice');
        $title = "Detail Invoice";
        $invoices_barangs = InvoiceBarang::where('invoices_id', $invoices->id)->get();
        //dd($invoices_barangs->all());
        return view('invoice.show', compact('invoices','judul', 'title', 'invoices_barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $invoices = Invoice::findOrFail($id);
        $judul = array('title' => 'Detail Invoice');
        $title = "Detail Invoice";
        $pegawais = Pegawai::all();
        $invoices_barangs = InvoiceBarang::where('invoices_id', $invoices->id)->get();
        //dd($invoices_barangs->all());
        return view('invoice.edit', compact('invoices','judul', 'title', 'invoices_barangs', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        //
        $invoices = Invoice::findOrFail($id);
        $invs = InvoiceBarang::where('invoices_id', $invoices->id)->delete();

        $datax = $request->all();
        $invoices->update($request->all());

        if($request->description){
            foreach($datax['description'] as $item => $value){
                $datas2 = array(
                    'invoices_id' => $invoices->id,
                    'description'=> $datax['description'][$item],
                    'qty' => $datax['qty'][$item],
                    'unit'=> $datax['unit'][$item],
                    'harga' => $datax['harga'][$item],
                    'jumlah'=> $datax['jumlah'][$item]
                );
                InvoiceBarang::updateOrCreate($datas2);
            }
        }

        return redirect()->route('invoice.index')->with('success','Invoice Telah Diupdate !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $invoices = Invoice::findorfail($id);
        $invoices->delete();

        return redirect()->back()->with('success','Invoice Berhasil Dihapus');
    }

    public function cetak_invoices($id)
    {
        $invoices = Invoice::find($id);
        $invoices_barangs = InvoiceBarang::where('invoices_id', $invoices->id)->get();
        $pdf = PDF::loadView('invoice.inv', compact('invoices', 'invoices_barangs'))->setPaper('a5', 'landscape');
        return $pdf->stream();
    }
}
