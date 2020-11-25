<?php

namespace Database\Seeders;

use App\Models\WarrantyGroup;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StoreSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(WarrantyGroupSeeder::class);

    }
}
