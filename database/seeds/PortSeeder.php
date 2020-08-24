<?php

use Illuminate\Database\Seeder;
Use App\Models\Port;

class PortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Port::create(
            ['port' => 'CGK', 'timezone' => 'Asia/Jakarta'],
            ['port' => 'UPG', 'timezone' => 'Asia/Makassar'],
            ['port' => 'MEL', 'timezone' => 'Australia/Melbourne'],
            ['port' => 'SYD', 'timezone' => 'Australia/Sydney']
        );
    }
}
