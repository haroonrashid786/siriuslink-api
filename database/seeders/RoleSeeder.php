<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        Role::truncate();
        $role1 = new Role();
        $role1->name = 'Admin';
        $role1->save();
        $role2 = new Role();
        $role2->name = 'User';
        $role2->save();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
