<?php

namespace Database\Seeders;

use App\Models\ImageIncentive;
use App\Models\Incentive;
use Illuminate\Database\Seeder;

class IncentiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incentives= Incentive::factory(9)->create();
        foreach ($incentives as $incentive){
            ImageIncentive::factory(1)->create([
                'imageable_id' => $incentive->id,
                'imageable_type' => Incentive::class
            ]);
        }
    }
}
