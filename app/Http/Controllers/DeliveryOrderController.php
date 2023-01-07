<?php

namespace App\Http\Controllers;

use App\DeliveryOrder;
use App\DeliveryOrderBarang;
use App\Pegawai;
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
        $judul = array('title' => 'Data Delivery Order');
        $delivery_order = DeliveryOrder::paginate(5);
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
        $title = "Tambah Delivery Orders";
        $pegawais = Pegawai::all();
        return view('deliveryorder.create', compact('judul', 'pegawais', 'title'));
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
        //
        $delivery_orders = DeliveryOrder::findOrFail($id);
        $dlv = DeliveryOrderBarang::where('do_id', $id)->find($id);

        $delivery_orders->update($request->all());

        // dd($request->all());

        if(count($request->description) > 0){
            foreach($request->description as $item => $value){
                $datas2 = array(
                    'do_id' => $delivery_orders->id,
                    'description'=> $request->description[$item],
                    'qty' => $request->qty[$item],
                    'unit'=> $request->unit[$item],
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

    public function print_delivery_order($id)
    {
        //
        $delivery_orders = DeliveryOrder::findOrFail($id);
        $delivery_order_barangs = DeliveryOrderBarang::where('do_id', $delivery_orders->id)->get();
        return view('deliveryorder.do', compact('delivery_orders', 'delivery_order_barangs'));
    }

}
