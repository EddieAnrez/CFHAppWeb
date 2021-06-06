<?php

namespace Database\Factories;

use App\Models\Category_L;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class Category_LFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category_L::class;

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
            'slug'=>Str::slug($name)
        ];
    }
}
