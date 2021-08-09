<?php

namespace Database\Factories;
use App\Models\HuatulcoImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class HuatulcoImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HuatulcoImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'url' => 'huatulco/'.$this->faker->image('public/storage/huatulco', 640,480,null,false)
            
        ];
    }
}
