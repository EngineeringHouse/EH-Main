<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    /**
     *
     * Display the room view
     *
     **/
    public function index ()
    {

        return view('room');

    }

    /**
     *
     * Get the room matching a given room_number
     *
     * @param Request $request     : The http request
     * @param Integer $room_number : The room to get
     *
     * @return: App\Room instance
     *
     **/
    public function get (Request $request, $room_number)
    {

        return Room::where("room_number", "=", $room_number)->first();

    }

    /**
     *
     * Update the modules a given room has
     *
     * @param Request $request     : The http request
     * @param Integer $room_number : The room to get
     *
     * @return: App\Room instance
     *
     **/
    public function update (Request $request, $room_number)
    {

        $room = $this->get($request, $room_number);
        $modules = $room->modules();

        if ($request->has('add')) {

            // Add modules.
            $add = $request->input('add');
            $modules->createMany($add);

        }

        if ($request->has('remove')) {

            // Remove existing modules.
            $remove = $request->input('remove');
            $modules->detatch($remove);

        }

        $room->save();

        return $room;

    }

}
