<?php

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

            'name'     => 'Computer Chairman',
            'email'    => 'ehousecomputerchair@gmail.com',
            'password' => '$2y$10$kN5F.Udv1ypFh7pgMsj3IeM8iW0D4gNGJVqCdtSPY2IO8JoVEUrMy',

        ]);

        DB::table('members')->insert([
            'room_id' => 1,
            'user_id' => 1,
        ]);
    }
}
