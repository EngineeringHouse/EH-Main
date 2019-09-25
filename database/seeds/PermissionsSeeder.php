<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define Roles
        $off_floor = Role::create(['name' => 'off_floor']);
        $on_floor = Role::create(['name' => 'on_floor']);
    }
}
