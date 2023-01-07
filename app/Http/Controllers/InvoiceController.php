<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\InvoiceBarang;
use App\Pegawai;
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
        $invoices = Invoice::paginate(10);
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
        $invoices = Invoice::create([
            'no_inv' => $request->no_inv,
            'pegawais_id' => $request->pegawais_id,
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'customer' => $request->customer,
            'telp' => $request->telp,
            'terbilang' => $request->terbilang,
        ]);

        // dd($request->all());

        if(count($request->description) > 0){
            foreach($request->description as $item => $value){
                $datas2 = array(
                    'invoices_id' => $invoices->id,
                    'jenis_order'=> $request->jenis_order[$item],
                    'qty' => $request->qty[$item],
                    'unit'=> $request->unit[$item],
                    'harga' => $request->harga[$item],
                    'jumlah'=> ($request->qty[$item])*($request->harga[$item]),
                );
                InvoiceBarang::create($datas2);
            }
        }

        return redirect('deliveryorder')->with('success','Delivery Order Telah Diinput !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
