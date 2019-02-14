<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes(){
        return $this->hasMany('App\Note');
    }

    public function addNotes(Note $note, $user)
    {
        $note->user_id = $user;
        
        return $this->notes()->save($note);
    }
}
