<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    protected $fillable = ['room_number'];

    public function modules(){

        return $this->hasMany(Module::class);

    }

    public function occupants(){

        return $this->hasMany(Member::class);

    }

}

