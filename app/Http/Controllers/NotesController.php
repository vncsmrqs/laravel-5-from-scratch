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
        //$card->notes()->create($request->all());
        $card->addNotes(
            new Note($request->all())
        );

        return back();
    }
}
