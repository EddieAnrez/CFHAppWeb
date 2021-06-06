<?php

namespace Database\Factories;

use App\Models\ImageLocation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageLocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'locations/'.$this->faker->image('public/storage/locations', 640,480,null,false)
        ];
    }
}
