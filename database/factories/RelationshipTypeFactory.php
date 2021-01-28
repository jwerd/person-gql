<?php

namespace Database\Factories;

use App\Models\RelationshipType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RelationshipTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RelationshipType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}
