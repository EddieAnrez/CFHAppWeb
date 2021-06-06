<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->name;
        return [
            'name' => $name,
            'email' => $this ->faker->email,
            'body' => $this->faker->text(500),
            'status'=>$this->faker->randomElement(['Sin Leer','Leido','Resuelto']),
            'assigned_user_id'=>User::all()->random()->id

        ];
    }
}
