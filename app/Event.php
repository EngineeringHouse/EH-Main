<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $hidden = ['host_id'];
    protected $appends = ['host'];

    public function getHostAttribute()
    {
        return $this->belongsTo(Member::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
