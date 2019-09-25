<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{

    public function event ()
    {

        return $this->belongsTo(Event::class);

    }

    public function user ()
    {

        return $this->belongsTo(Member::class);

    }

}
