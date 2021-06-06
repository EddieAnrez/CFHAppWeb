<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence(4);
        return [ 
            'name'=> $name,
            'desc'=>$this->faker->text(100),
            'url'=>$this->faker->randomElement(['https://youtu.be/OBUFXcn6xfY','https://youtu.be/PvOiFiZ-niM']),
            'status'=>$this->faker->randomElement([1,2]),
            'user_id'=>User::all()->random()->id
                    
            
        ];
    }
}
