<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ServiceSubCategory;
use App\Models\User;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence(3);
        return [
            'name'=> $name,
            'contact'=>$this->faker->text(200),
            'adress'=>$this->faker->sentence(10),
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'website'=>$this->faker->url,
            'desc'=>$this->faker->text(200),
            'facebook'=>$this->faker->word(20),
            'twitter'=>$this->faker->word(20),
            'instagram'=>$this->faker->word(20),
            'youtube'=>$this->faker->word(20),
            'pinterest'=>$this->faker->word(20),
            'subcategory_id'=> ServiceSubCategory::all()->random()->id,
            'user_id'=>User::all()->random()->id
        ];
    }
}
