<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function get(Request $request, $room_number){

        return Room::where("room_number","=",$room_number)->first();

    }

    public function update(Request $request, $room_number){

        $room = $this->get($request, $room_number);
        $modules = $room->modules();

        if($request->has('add')){

            // Add modules.
            $add = $request->input('add');
            $modules->createMany($add);

        }

        if($request->has('remove')){

            // Remove existing modules.
            $remove = $request->input('remove');
            foreach($remove as $removeModule){

                $module = $modules->find($removeModule->id);
                if($module->type == $removeModule->type){

                    $modules->detatch($removeModule->id);

                }

            }

        }

        $room->save();
        return $room;

    }

}
