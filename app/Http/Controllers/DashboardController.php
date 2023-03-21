<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\BarangKeluar;
use App\BarangMasuk;
use App\JobOrder;

class DashboardController extends Controller
{
    //
    public function index(){
        $title = "PESO Printing | Dashboards";
        $data = array('title' => 'Dashboard');
        $barangs = Barang::all();
        $barangkeluars = BarangKeluar::all();
        $barangmasuks = BarangMasuk::all();
        $job_orders = JobOrder::all();
        return view('dashboards.index', compact('data', 'barangs', 'title', 'barangmasuks', 'barangkeluars', 'job_orders'));
    }
}
