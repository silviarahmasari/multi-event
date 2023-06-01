<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Participant;
use App\Models\SubDistrictProfile;
use App\Models\MapDistrictSport;
use App\Models\Sport;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardAdmin()
    {
        $admin = count(User::where('id_role', '=', '1')->get());
        $camat = count(User::where('id_role', '=', '3')->get());
        $peserta = count(Participant::all());
        $sport = count(Sport::all());

        return view('dashboard.admin', compact('admin', 'camat', 'peserta', 'sport'));
    }

    public function dashboardCamat()
    {
        $pendaftaran = count(MapDistrictSport::all());
        $peserta = count(Participant::all());
        $cabor = count(Sport::all());

        return view('dashboard.camat', compact('pendaftaran', 'peserta', 'cabor'));

    }

    public function dashboardKetupel()
    {
        $pendaftaran = MapDistrictSport::join('tbl_kecamatan', 'tbl_kecamatan.id_kecamatan', '=', 'map_district_sports.id_sub_district')
            ->join('sports', 'sports.id', '=', 'map_district_sports.id_sport')
            ->get();
        $countPendaftaran = count(MapDistrictSport::all());
        $cabor = MapDistrictSport::distinct()->count('id_sport');

        return view('dashboard.ketupel', compact('pendaftaran', 'countPendaftaran', 'cabor'));
    }

}
