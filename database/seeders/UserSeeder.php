<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alejandro Serna',
            'email' => 'edderserna03@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Edder Serna',
            'email' => 'edderserna89@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Editor');

        User::create([
            'name' => 'Óscar Sánchez L.',
            'email' => 'oscarsanchez@comisionfilmicahuatulco.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Carlos César Ramos Mantecón',
            'email' => 'carlosramos@comisionfilmicahuatulco.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Eréndira Hernández Cárdenas',
            'email' => 'erendirahernandez@comisionfilmicahuatulco.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'José Manuel Tenorio Salgado',
            'email' => 'manueltenorio@comisionfilmicahuatulco.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Juan Miguél Buitrago Aledo',
            'email' => 'miguelbuitrago@comisionfilmicahuatulco.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::create([
            'name' => 'Lauro Santana Carrillo Solano',
            'email' => 'laurocarrillo@comisionfilmicahuatulco.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');
        
        User::factory(9)->create();
    }
}
