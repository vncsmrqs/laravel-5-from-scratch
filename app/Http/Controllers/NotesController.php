<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $this->validate($request, [
            'body' => 'required|'
        ]);

        //$card->notes()->create($request->all());
        
        $note = new Note($request->all());
        
        $card->addNotes($note, 1);

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return redirect('cards/'. $note->card_id);
    }
}
