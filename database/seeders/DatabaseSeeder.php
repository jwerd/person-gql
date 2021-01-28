<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(RelationshipTypeSeeder::class);
        \App\Models\Person::factory(20)->create()->map(function ($person) {
            $person->phones()->saveMany(\App\Models\Phone::factory(rand(1,20))->make());
            $person->addresses()->saveMany(\App\Models\Address::factory(rand(1,20))->make());
        });
        \App\Models\Relationship::factory(10)->create();
        // \App\Models\Phone::factory(20)->create();
        // \App\Models\Address::factory(20)->create();
    }
}
