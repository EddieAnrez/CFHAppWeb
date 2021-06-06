<?php

namespace Database\Factories;

use App\Models\ImageIncentive;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageIncentiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageIncentive::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => 'incentives/'.$this->faker->image('public/storage/incentives', 640,480,null,false)
        ];
    }
}
