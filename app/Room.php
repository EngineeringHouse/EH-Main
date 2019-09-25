<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $appends = ['modules'];
    protected $fillable = ['room_number'];
    protected $hidden = ['created_at', 'updated_at'];

    public function getModulesAttribute()
    {
        return $this->modules()->get();
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function occupants()
    {
        return $this->hasMany(Member::class);
    }
}
