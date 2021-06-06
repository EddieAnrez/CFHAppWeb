<?php

namespace Database\Factories;

use App\Models\ServiceSubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ServiceCategory;

class ServiceSubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceSubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);
        return [
            'name'=> $name,
            'slug'=> Str::slug($name),
            'category_id'=> ServiceCategory::all()->random()->id,
        ];
    }
}
