<?php

namespace App\Http\Controllers;

use App\DeliveryOrder;
use App\DeliveryOrderBarang;
use App\Pegawai;
use PDF;

use Illuminate\Http\Request;

class DeliveryOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Data Delivery Order";
        $judul = array('title' => 'PESO Printing | Delivery Order');
        $delivery_order = DeliveryOrder::orderBy('created_at', 'desc')->paginate(5);
        $pegawais = Pegawai::all();
        return view('deliveryorder.index', compact('judul', 'delivery_order', 'title', 'pegawais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $judul = array('title' => 'Delivery Order');
        $title = "PESO Printing | Tambah DO";
        $awal = "DO";
        $pegawais = Pegawai::all();
        

        //romawi berdasarkan bulan
        function convertToRoman($number){
            $map = [
                'M'  => 1000,
                'CM' => 900,
                'D'  => 500,
                'CD' => 400,
                'C'  => 100,
                'XC' => 90,
                'L'  => 50,
                'XL' => 40,
                'X'  => 10,
                'IX' => 9,
                'V'  => 5,
                'IV' => 4,
                'I'  => 1
            ];

            $roman = '';
            foreach ($map as $romanNumeral => $arabicNumeral) {
                while ($number >= $arabicNumeral) {
                    $roman .= $romanNumeral;
                    $number -= $arabicNumeral;
                }
            }

            return $roman;
        }

        $month = date('n'); // Mengambil nomor bulan saat ini
        $romanMonth = convertToRoman($month);

        $noUrutAkhir = DeliveryOrder::max('id');
        if (date('d')=='01'){ $ax = '001'; }
        else{ $ax = sprintf("%03s", $noUrutAkhir + 1); };
        $nomordo = $awal . '/'. $ax . '/'. 'AG' . '/' . $romanMonth .'/' . date('Y');

        return view('deliveryorder.create', compact('judul', 'pegawais', 'title', 'currentYear', 'month', 'romanMonth', 'awal', 'noUrutAkhir', 'nomordo', 'ax'));
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
        $delivery_orders = DeliveryOrder::create($request->all());

        // dd($request->all());

        if(count($request->description) > 0){
            foreach($request->description as $item => $value){
                $datas2 = array(
                    'do_id' => $delivery_orders->id,
                    'description'=> $request->description[$item],
                    'qty' => $request->qty[$item],
                    'unit'=> $request->unit[$item],
                );
                DeliveryOrderBarang::create($datas2);
            }
        }

        return redirect('deliveryorder')->with('success','Delivery Order Telah Diinput !!');
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
        $delivery_orders = DeliveryOrder::findOrFail($id);
        $judul = array('title' => 'Detail Delivery Order');
        $title = "Detail Delivery Order";
        $delivery_order_barangs = DeliveryOrderBarang::where('do_id', $delivery_orders->id)->get();
        return view('deliveryorder.show', compact('delivery_orders','judul', 'title', 'delivery_order_barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $delivery_orders = DeliveryOrder::findOrFail($id);
        $judul = array('title' => 'Edit Delivery Order');
        $title = "Edit Delivery Order";
        $delivery_order_barangs = DeliveryOrderBarang::where('do_id', $delivery_orders->id)->get();
        return view('deliveryorder.edit', compact('delivery_orders','judul', 'title', 'delivery_order_barangs'));
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
        // dd($request->all());
        //
        $delivery_orders = DeliveryOrder::findOrFail($id);
        $dlv = DeliveryOrderBarang::where('do_id', $id)->delete();

        $datax = $request->all();
        $delivery_orders->update($request->all());

        if($request->description){
            foreach($datax['description'] as $item => $value){
                $datas2 = array(
                    'do_id' => $delivery_orders->id,
                    'description'=> $datax['description'][$item],
                    'qty' => $datax['qty'][$item],
                    'unit'=> $datax['unit'][$item],
                );
                DeliveryOrderBarang::updateOrCreate($datas2);
            }
        }

        return redirect()->route('deliveryorder.index')->with('success','Delivery Order Telah Diupdate !!');

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
        $deliveryorders = DeliveryOrder::findorfail($id);
        $deliveryorders->delete();

        return redirect()->back()->with('success','Delivery Order Berhasil Dihapus');
    }

    public function cetak_delivery_order($id)
    {
        $delivery_orders = DeliveryOrder::find($id);
        $delivery_order_barangs = DeliveryOrderBarang::where('do_id', $delivery_orders->id)->get();
        $pdf = PDF::loadview('deliveryorder.do', compact('delivery_orders', 'delivery_order_barangs'))->setPaper('a5', 'landscape');
        return $pdf->stream();
    }

}
