<?php

use App\Room;
use App\Module;
use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $room = Room::all()->first();

        $room->modules()->create([

            'i2c_address' => "0x04",
            'type' => "led",
            'data' => json_encode([
                "length"=>1,
                "status"=>"OFF",
            ])

        ]);
    }
}
