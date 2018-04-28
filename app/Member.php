<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $fillable = ['room_id'];

    public function room(){

        return $this->belongsTo(Room::class)->first();

    }

    public function user(){

        return $this->belongsTo(User::class)->first();

    }

}
