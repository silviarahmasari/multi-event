<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MapDistrictSport;

class KetupelController extends Controller
{
    public function index()
    {
        $pendaftaran = DB::table('map_district_sports')->select('*', 'map_district_sports.id as id_map','map_district_sports.status as status_map')
        ->join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan', '=', 'map_district_sports.id_sub_district')
        ->join('sports', 'sports.id', '=', 'map_district_sports.id_sport')
        ->where('map_district_sports.status', '=', 'Verified')
        ->get();
        $countPendaftaran = count(MapDistrictSport::all());
        $cabor = MapDistrictSport::distinct()->count('id_sport');

        return view('dashboard.ketupel', compact('pendaftaran', 'countPendaftaran', 'cabor'));
    }
}
