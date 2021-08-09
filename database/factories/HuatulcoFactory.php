<?php

namespace Database\Factories;

use App\Models\Huatulco;
use Illuminate\Database\Eloquent\Factories\Factory;

class HuatulcoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Huatulco::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'section'=>$this->faker->word(2),
            'body'=>$this->faker->text(250)
        ];
    }
}
