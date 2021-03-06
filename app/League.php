<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    //
    public function matches(){
        $this->morphTo('App\Match', 'competition');
    }

    public function teams(){
        return $this->hasMany("App\Team");
    }
    
}
