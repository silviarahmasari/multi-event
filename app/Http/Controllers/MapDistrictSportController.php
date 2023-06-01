<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\MapDistrictSport;
use App\Models\SubDistrictProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MapDistrictSportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mds = MapDistrictSport::leftjoin('sports','sports.id','=','map_district_sports.id_sport')->get();

        return view('user.pendaftaran.pendaftarandata', compact('mds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports = Sport::all();
        
        return view('user.pendaftaran.pendaftaran', compact('sports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cari kecamatan
        $findSubDistrict = SubDistrictProfile::select('id_kecamatan')->where('id_user', '=', Auth::user()->id)->get();
        $id_sub_district = $findSubDistrict[0]->id_kecamatan;

        // Cek grup apakah sudah terdaftar pada cabor dan kecamatan
        $mds = MapDistrictSport::where('id_sport', '=', $request -> id_sport)
        ->where('id_sub_district', '=', $id_sub_district)
        ->where('group_name', '=', $request -> group_name)
        ->get();

        if (count($mds) > 0) {
            return redirect('mapdistrictsport/create')->with('error', 'Nama grup pada cabang olahraga ini telah terdaftar.');
        } 
        
        $mds = new MapDistrictSport;
        $mds -> id_sub_district = $id_sub_district;
        $mds -> id_sport = $request -> id_sport;
        $mds -> group_name = $request -> group_name;
        $mds -> status = "On Process";
        $mds -> save();
        
        if(!$mds->id){
            return redirect('mapdistrictsport/index')->with('error', 'Pendaftaran grup gagal.');
        }
        return redirect('participant/create/'.$mds->id)->with('success', 'Tambahkan partisipan dalam grup.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MapDistrictSport  $mapDistrictSport
     * @return \Illuminate\Http\Response
     */
    public function show(MapDistrictSport $mapDistrictSport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MapDistrictSport  $mapDistrictSport
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mds = MapDistrictSport::find($id);

        return view('user.pendaftaran.pendaftaranedit', compact('mds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MapDistrictSport  $mapDistrictSport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MapDistrictSport $mapDistrictSport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MapDistrictSport  $mapDistrictSport
     * @return \Illuminate\Http\Response
     */
    public function destroy(MapDistrictSport $mapDistrictSport)
    {
        //
    }
}
