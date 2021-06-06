<?php

namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class LinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Link::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() 
    {
        return [
            'img'=>$this->faker->imageUrl(640, 480, 'cats') ,
            'link'=>$this->faker->url,
            'user_id'=>User::all()->random()->id 
        ];
    }
}
