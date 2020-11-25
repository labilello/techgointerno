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
        WarrantyGroup::create(['name' => 'Garantías Marcas Nacionales']);
        WarrantyGroup::create(['name' => 'Garantías Marcas Propias']);
        WarrantyGroup::create(['name' => 'Garantías extendidas']);
    }
}
