<?php

namespace App\Http\Controllers;

use App\Events\ModuleChange;
use App\Room;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function update(Request $request, $room_number, $module_id)
    {
        $room = Room::where('room_number', '=', $room_number)->first();
        $module = $room->modules()->find($module_id);
        if ($request->has('status')) {
            $module->status = $request->input('status');
            $module->save();

            event(new ModuleChange($module, $room_number));
        }

        return redirect("api/rooms/$room_number");
    }
}
