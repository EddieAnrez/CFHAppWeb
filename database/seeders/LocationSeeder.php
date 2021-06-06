<?php

namespace Database\Seeders;


use App\Models\Location;
use Illuminate\Database\Seeder;
use App\Models\ImageLocation;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations= Location::factory(20)->create();
        foreach ($locations as $location){
            ImageLocation::factory(5)->create([
                'imageable_id'=>$location->id,
                'imageable_type'=>Location::class
            ]);
        }
    }
}
