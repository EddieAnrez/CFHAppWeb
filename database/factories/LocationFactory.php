<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Category_L;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Location::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->unique()->word(30);
        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'adress'=>$this->faker->unique()->sentence(),
            'body'=>$this->faker->text(500),
            'features'=>$this->faker->text(500),
            'contact'=>$this->faker->text(100),
            'status'=>$this->faker->randomElement([1,2]),
            'showMap'=>$this->faker->randomElement([1,2]),
            'latlocation'=>$this->faker->latitude,
            'lonlocation'=>$this->faker->longitude,
            'facebook'=>$this->faker->word(20),
            'twitter'=>$this->faker->word(20),
            'youtube'=>$this->faker->word(20),
            'instagram'=>$this->faker->word(20),
            'website'=>$this->faker->url,
            'category_id'=>Category_L::all()->random()->id,
            'area_id'=>Area::all()->random()->id,
            'user_id'=>User::all()->random()->id
        ];
    }
}
