<?php

namespace Database\Seeders;

use App\Models\Huatulco;
use App\Models\HuatulcoImage;
use Illuminate\Database\Seeder;

class HuatulcoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections=Huatulco::factory(15)->create();
        foreach ($sections as $section){
            HuatulcoImage::factory(1)->create([
                'imageable_id' => $section->id,
                'imageable_type' => Huatulco::class
            ]);
           

        }
    }
}
