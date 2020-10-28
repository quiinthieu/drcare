<?php

namespace Database\Seeders;

use App\Models\Resource;
use App\Models\ResourceType;
use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResourceType::factory(2)->create()->each(function ($resourceType) {
            Resource::factory(24)->create(['resource_type_id'=> $resourceType->id]);
        });
    }
}
