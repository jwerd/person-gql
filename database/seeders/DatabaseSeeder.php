<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::factory(2)->create();

        $this->call(RelationshipTypeSeeder::class);
        \App\Models\Person::factory(20)->create(['user_id' => 1])->map(function ($person) {
            $user_id = DB::table('users')
            ->inRandomOrder()
            ->first()->id;
            dump($person->id, $user_id);
            $person->update(['user_id' => $user_id]);

            $person->pets()->saveMany(\App\Models\Pet::factory(rand(0,4))->make(['person_id' => $person->id]));
            //$person->pets()->comments()
            $person->phones()->saveMany(\App\Models\Phone::factory(rand(1,20))->make(['person_id' => $person->id]));
            $person->addresses()->saveMany(\App\Models\Address::factory(rand(1,20))->make(['person_id' => $person->id]));
            $relationship = \App\Models\Person::factory()->create(['user_id' => $user_id]);
            $person->relationships()->saveMany(\App\Models\Relationship::factory(1)->make(['person_id' => $person->id, 'relationship_person_id' => $relationship->id]));
        });
        
        // Add random comments to pets
        \App\Models\Pet::all()->map(function ($pet) {
            //dump(\App\Models\Comment::factory(rand(0,15))->make());
            $pet->comments()->create(['body' => 'test']);
        });
       // \App\Models\Relationship::factory(10)->create();
        // \App\Models\Phone::factory(20)->create();
        // \App\Models\Address::factory(20)->create();
    }
}
