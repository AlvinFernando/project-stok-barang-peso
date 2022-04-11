<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class DashboardController extends Controller
{
    //
    public function index(){
        $title = "Dashboards";
        $data = array('title' => 'Dashboard');
        $barangs = Barang::all();
        return view('dashboards.index', compact('data', 'barangs', 'title'));
    }
}
