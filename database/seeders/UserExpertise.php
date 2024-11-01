<?php

namespace Database\Seeders;

use App\Models\Expertise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserExpertise extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_expertise = [
            "AV / PRO AV", "Broadcast & Media", "IT"
        ];
        foreach ($user_expertise as $exp) {
            Expertise::create([
                'name' => $exp,
            ]);
        }
    }
}
