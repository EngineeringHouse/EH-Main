<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $hidden = ['created_at','room_id'];
    protected $fillable = ['i2c_address','type','data'];

    public function room(){

        return $this->belongsTo(Room::class);

    }

}
