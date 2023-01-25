<?php

namespace App\Http\Controllers;

use App\JobOrder;
use App\Pegawai;
use PDF;
use Illuminate\Http\Request;

class JobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = "Job Order";
        $judul = array('title' => 'Job Order');
        $job_orders = JobOrder::orderBy('created_at', 'desc')->paginate(10);
        return view('joborder.index', compact('judul', 'job_orders', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $judul = array('title' => 'Job Order');
        $title = "Tambah Job Orders";
        $pegawai = Pegawai::all();
        return view('joborder.create', compact('judul', 'pegawai', 'title'));
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
        $errors = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi dengan minimal :min karakter !',
            'max' => ':attribute harus diisi dengan maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka saja !',
        ];

        $this->validate($request, [
            'tanggal' => 'required',
            'customer' => 'required'
        ], $errors);

        JobOrder::Create([
            'tanggal' => $request->tanggal,
            'customer' => $request->customer,
            'jenis_order' => $request->jenis_order,
            'size' => $request->size,
            'pages' => $request->pages,
            'color' => $request->color,
            'qty' => $request->qty,
            'finishing' => $request->finishing,
            'pegawais_id' => $request->pegawais_id,
            'deadline' => $request->deadline,
            'materials' => $request->materials,
            'no_jo' => $request->no_jo,
            'jam' => $request->jam,
            'materials_2' => $request->materials_2,
            'materials_3' => $request->materials_3
        ]);

        return redirect('joborder')->with('success','Data Job Orders Telah Diinput !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobOrder  $jobOrder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $job_orders = JobOrder::findOrFail($id);
        $judul = array('title' => 'Data Job Order');
        $title = "Detail Job Order";
        return view('joborder.show', compact('job_orders','judul', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobOrder  $jobOrder
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $judul = array('title' => 'Ubah Job Orders');
        $title = "Ubah Job Orders";
        $job_orders = JobOrder::findOrFail($id);
        $pegawai = Pegawai::all();
        return view('joborder.edit', compact('judul', 'title', 'job_orders', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobOrder  $jobOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request , [
            'tanggal' => 'required',
            'customer' => 'required'
        ]);

        JobOrder::findOrFail($id)->update([
            'tanggal' => $request->tanggal,
            'customer' => $request->customer,
            'jenis_order' => $request->jenis_order,
            'size' => $request->size,
            'pages' => $request->pages,
            'color' => $request->color,
            'qty' => $request->qty,
            'finishing' => $request->finishing,
            'deadline' => $request->deadline,
            'pegawais_id' => $request->pegawais_id,
            'materials' => $request->materials,
            'no_jo' => $request->no_jo,
            'jam' => $request->jam,
            'materials_2' => $request->materials_2,
            'materials_3' => $request->materials_3
        ]);

        return redirect()->route('joborder.index')->with('success','Job Order Telah DIUBAH !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobOrder  $jobOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $job_orders = JobOrder::findorfail($id);
        $job_orders->delete();

        return redirect()->back()->with('success','Job Orders Berhasil Dihapus');
    }

    public function cetak_job_order($id)
    {
        $job_orders = JobOrder::find($id);
        $pdf = PDF::loadView('joborder.jo', compact('job_orders'))->setPaper('a5', 'landscape');
        return $pdf->stream();
    }
}
