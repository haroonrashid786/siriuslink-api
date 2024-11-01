<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usercheck = User::where('email', 'dev@hashedsystem.com')->first();
        if ($usercheck != null) {
            $usercheck->delete();
        }
        $user = new User();
        $user->full_name = 'HS ~ Admin';
        $user->email = 'dev@hashedsystem.com';
        $user->mobile_number = '03242841822';
        $user->password = Hash::make('123456');
        $user->save();

        $role = Role::where('name', 'Admin')->first();
        $user->roles()->attach($role->id);
    }
}
