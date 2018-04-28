<?php

use App\Room;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::firstOrCreate([

            'name'     => 'Lukas Yelle',
            'email'    => 'lxy5611@g.rit.edu',
            'password' => '$2y$10$qO1QKDTbESU9NPvvz2uBveUyfkct3TmMqyMj6hDcpXeUtuub0TodC'

        ]);

        DB::table('members')->insert([
            'room_id'=>1,
            'user_id'=>1
        ]);

    }
}
