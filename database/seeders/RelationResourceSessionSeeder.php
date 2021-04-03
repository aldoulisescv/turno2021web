<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RelationResourceSession;

class RelationResourceSessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RelationResourceSession::create([
            'resource_id' => 1,
            'session_id' => 1,
        ]);
        RelationResourceSession::create([
            'resource_id' => 1,
            'session_id' => 2,
        ]);
        RelationResourceSession::create([
            'resource_id' => 1,
            'session_id' => 3,
        ]);
        RelationResourceSession::create([
            'resource_id' => 2,
            'session_id' => 2,
        ]);
        RelationResourceSession::create([
            'resource_id' => 2,
            'session_id' => 3,
        ]);
    }
}
