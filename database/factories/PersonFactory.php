<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Person::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'    => null,
            'first_name' => $this->faker->name,
            'last_name'  => $this->faker->name,
        ];
    }
}
