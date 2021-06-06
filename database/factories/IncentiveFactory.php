<?php

namespace Database\Factories;

use App\Models\Incentive;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class IncentiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Incentive::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'desc'=>$this->faker->text(500),
            'link'=>$this->faker->url,
            'user_id'=>User::all()->random()->id  
        ];
    }
}
