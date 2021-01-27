<?php

namespace Database\Factories;

use App\Models\Address;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id' => Person::factory(),
            'street1' => $this->faker->streetAddress,
            'street2' => '',
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zip' => rand(11111,99999)
        ];
    }
}
