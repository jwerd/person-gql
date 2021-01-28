<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\Relationship;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class RelationshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Relationship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id' => Person::factory(),
            'relationship_person_id' => Person::factory(),
            'relationship_type_id' => DB::table('relationship_types')
            ->inRandomOrder()
            ->first()->id,
        ];
    }
}
