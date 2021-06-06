<?php

namespace Database\Factories;

use App\Models\Config;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



class ConfigFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Config::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence();
        return [
            'title'=>$title,
            'body'=>$this->faker->text(150),
            'user_id'=>User::all()->random()->id
        ];
    }
}
