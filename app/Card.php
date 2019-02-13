<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes(){
        return $this->hasMany('App\Note');
    }

    public function addNoe(Note $note)
    {
        return $this->notes()->save($notes);
    }
}
