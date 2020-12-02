<?php

namespace Database\Seeders;

use App\Models\WarrantyGroup;
use Illuminate\Database\Seeder;

class WarrantyGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WarrantyGroup::create(['name' => 'Soporte TechGo']);
        WarrantyGroup::create(['name' => 'Garantías extendidas']);
        WarrantyGroup::create(['name' => 'Otros centros de soporte']);
    }
}
