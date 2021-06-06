<?php

namespace Database\Factories;

use App\Models\Permisssion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
class PermisssionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Permisssion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence(5);
        return [
            'name'=> $name,
            'slug' => Str::slug($name),
            'desc'=>$this->faker->text(200),
            'url'=>$this->faker->url,
            'user_id'=>User::all()->random()->id
                                
        ];
    }
}
