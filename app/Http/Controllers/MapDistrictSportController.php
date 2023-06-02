<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use App\Models\MapDistrictSport;
use App\Models\SubDistrictProfile;
use App\Models\Kecamatan;
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
        $mds = MapDistrictSport::select('*','map_district_sports.id as id_map_district_sports')
        ->join('sports','sports.id','=','map_district_sports.id_sport')
        ->get();
        // dd($mds);

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
        $kecamatan = Kecamatan::all();

        
        return view('user.pendaftaran.pendaftaran', compact('sports','kecamatan'));
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
        // dd($mds->id);
        if(!$mds->id){
            return redirect('/participant/index')->with('error', 'Pendaftaran grup gagal.');
        }
        // return redirect('/participant/index')->with('error', 'Pendaftaran grup gagal.');
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
        $sports = Sport::all();
        $mds = MapDistrictSport::select('*', 'map_district_sports.id as id_map_district_sport')
        ->leftjoin('sports','sports.id','=','map_district_sports.id_sport')
        ->leftjoin('tbl_kecamatan','tbl_kecamatan.id_kecamatan','=','map_district_sports.id_sub_district')
        ->where('map_district_sports.id', $id)
        ->get();
        $participants = MapDistrictSport::select('*', 'map_district_sports.id as id_map_district_sport', 'participants.id as id_participant')
        ->leftjoin('sports','sports.id','=','map_district_sports.id_sport')
        ->leftjoin('tbl_kecamatan','tbl_kecamatan.id_kecamatan','=','map_district_sports.id_sub_district')
        ->leftjoin('participants','participants.id','=','map_district_sports.id')
        ->where('map_district_sports.id', $id)
        ->get();
        // dd($participants);

        return view('user.pendaftaran.pendaftaranedit', compact('sports','mds', 'participants'));
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
