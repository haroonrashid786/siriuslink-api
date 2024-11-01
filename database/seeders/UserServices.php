<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserServices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            "Consultation", "System Design & Drawing", "Equipment Supply",
            "Maintenance", "Training & Support",
            "Outsourcing / Team Development", "Video Equipment Rentals",
            "Audio Equipment Rentals", "Lighting Equipment Rentals", "Video Walls Rental",
            "SNG Services", "Live Streaming Services", "Live Event Services",    "Esports / Gaming Services",
            "Advertising Services", "Voice Over Services", "Telecoms / Mobile Services", "Software Supply"
        ];
        foreach ($services as $service) {
            Service::create([
                'name' => $service
            ]);
        }
    }
}
