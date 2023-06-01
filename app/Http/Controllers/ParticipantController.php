<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
    public function index()
    {
        $participant = Participant::get();

        return view('participant.index', compact('participant'));
    }
}
