<?php

namespace App\Http\Controllers;

use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sport = Sport::all();
        return view('sport.index', compact('sport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sport.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sport = new Sport;
        $sport -> sport_name = $request -> sport_name;
        $sport -> notes = $request -> notes;
        $sport -> save();
        
        return redirect('sport/index')->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        $sport = Sport::find($id);
        $sport->get();

        return view('sport.edit', compact('sport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        $sport = Sport::find($id);
        $sport->get();

        return view('sport.edit', compact('sport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sport $sport)
    {
        $sport = Sport::find($id);
        $sport->sport_name = $request->sport_name;
        $sport->notes = $request->notes;

        $sport->update();

        return redirect('sport/index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sport $sport)
    {
        $sport = Sport::find($id);
        $sport->delete();

        return redirect('sport/index')->with('success', 'Data deleted successfully');
    }
}