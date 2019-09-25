<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $appends = ['user'];
    protected $fillable = ['room_id'];

    public function getUserAttribute ()
    {

        return $this->user();

    }

    public function room ()
    {

        return $this->belongsTo(Room::class)->first();

    }

    public function events ()
    {

        return $this->hasMany(Event::class);

    }

    public function user ()
    {

        return $this->belongsTo(User::class)->first();

    }

}
