<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Adminlte;
use App\Models\benih;
use App\Models\bibitmusiman;
use App\Models\bibittahunan;
use App\Models\buah;
use App\Models\perikanan;
use App\Models\peternakan;
use App\Models\sayuran;
use App\Models\tanaman;
use App\Models\pelatihan;
use App\Models\konsultan;
use App\Models\Order_konsultan;
use App\Models\Order_pelatihan;
use App\Models\Order_outingclass;
use App\Models\Order_buah;
use App\Models\Order_sayuran;
use App\Models\Order_tanamanpangan;
use App\Models\Order_peternakan;
use App\Models\Order_perikanan;
use App\Models\Order_benih;
use App\Models\Order_bibitmusiman;
use App\Models\Order_bibittahunan;
use App\Models\pupuk;







use Illuminate\Http\Request;

class AdminlteController extends Controller
{
    public function index(){
    $data['module']['name'] = "Beranda";
    return view('adminlte.index',['data' => $data,
    'jumlah_admin' => Admin:: count(),
    'jumlah_buah' => Buah:: count(),
    'jumlah_sayuran' => Sayuran:: count(),
    'jumlah_tanaman' => Tanaman:: count(),
    'jumlah_peternakan' => Peternakan:: count(),
    'jumlah_perikanan' => Perikanan:: count(),
    'jumlah_pelatihan' => Pelatihan:: count(),
    'jumlah_konsultan' => Konsultan:: count(),
    'jumlah_benih' => Benih:: count(),
    'jumlah_bibitmusiman' => Bibitmusiman:: count(),
    'jumlah_bibittahunan' => Bibittahunan:: count(),
    'jumlah_orderkonsultan' => Order_konsultan:: count(),
    'jumlah_orderpelatihan' => Order_pelatihan:: count(),
    'jumlah_orderoutingclass' => Order_outingclass:: count(),
    'jumlah_orderbuah' => Order_buah:: count(),
    'jumlah_ordersayuran' => Order_sayuran:: count(),
    'jumlah_ordertanamanpangan' => Order_tanamanpangan:: count(),
    'jumlah_orderpeternakan' => Order_peternakan:: count(),
    'jumlah_orderperikanan' => Order_perikanan:: count(),
    'jumlah_orderbenih' => Order_benih:: count(),
    'jumlah_orderbibitmusiman' => Order_bibitmusiman:: count(),
    'jumlah_orderbibittahunan' => Order_bibittahunan:: count(),
    'jumlah_dashboardpupuk' => Pupuk:: count(),]);
    }
}
