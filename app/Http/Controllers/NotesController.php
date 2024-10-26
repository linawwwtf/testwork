<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Note;
use Request;

class NotesController extends Controller {

    public function index()
    {
        $notes = Note::where('status', 'useful')->orderBy('status', 'useful')->get();

        return view('notes.index', compact('notes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'text'=> 'required|string',
            'status'=> 'required|string',
        ]);

        Note::create($request->all());
        
        redirect()->back();
    }

    public function updateStatus($id, $status)
    {
        $note = Note::findOrFail($id);
    }

    public function complaintsOffers()
    {
        $notes = Note::where('status', 'complaint', 'offer')->get();

        return view('notes.complaintsOffers', compact('notes'));
    }
}