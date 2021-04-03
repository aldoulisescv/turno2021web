<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resource::create([
            'enabled' => 1,
            'establishment_id' => 1,
            'name' => 'Sillón 1',
            'selectable' => 1,
            'order_alpha' => 'asc',
        ]);
        Resource::create([
            'enabled' => 1,
            'establishment_id' => 1,
            'name' => 'Sillón 2',
            'selectable' => 1,
            'order_alpha' => 'asc',
        ]);
    }
}
