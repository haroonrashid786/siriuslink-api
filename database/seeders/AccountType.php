<?php

namespace Database\Seeders;

use App\Models\AccountType as ModelsAccountType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account_type = [
            "System Integrator", "Manufacturer / Vendor", "Distributor / Reseller",
            "Freelance", "Media Production", "Stage Production", "Rental House",
            "Media Hub", "Consultancy/ Analytics / Research",  "Broadcaster",
            "Sales / Procurement / Marketing ", "Government / Industry Body / Educational Organization", "Others"
        ];
        foreach ($account_type as $acc) {
            ModelsAccountType::create([
                'name' => $acc,
            ]);
        }
    }
}
