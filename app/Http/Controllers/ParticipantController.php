<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\MapDistrictSport;
use App\Models\Sport;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index2()
    {
        $participant = Participant::get();

        return view('participant.index', compact('participant'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sports = Sport::all();
        $kecamatan = Kecamatan::all();
        return view('user.pendaftaran.pendaftaranpartisipan2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $mds = MapDistrictSport::find($id);

        return view('user.pendaftaran.pendaftaranpartisipan', compact('mds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
        $mds = MapDistrictSport::find($id);
        $participant = new Participant;
        $participant -> id_map_district_sport = $id;
        $participant -> participant_name = $request -> participant_name;
        $participant -> participant_dob = $request -> participant_dob;
        $participant -> participant_gender = $request -> participant_gender;
        $participant -> participant_address = $request -> participant_address;
        $participant -> participant_domicile = $request -> participant_domicile;
        $participant -> no_ktp = $request -> no_ktp;
        $participant -> no_kk = $request -> no_kk;
        $participant -> no_akte = $request -> no_akte;
        $participant -> no_ijazah = $request -> no_ijazah;
        $participant -> pas_foto = $request -> pas_foto;
        $participant -> save();

        if(!$participant->id){
            return redirect('pendaftaran/index')->with('error', 'Pendaftaran partisipan gagal.');
        }
        return redirect('mapdistrictsport/index')->with('success', 'Pendaftaran berhasil.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }
}
