<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceType::factory(4)->create()->each(function($serviceType) {
            Service::factory(6)->create(['service_type_id' => $serviceType->id]);
        });
    }
}
