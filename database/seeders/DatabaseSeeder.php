<?php

namespace Database\Seeders;


use App\Models\Area;
use App\Models\Category;
use App\Models\Category_L;
use App\Models\Tag;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Permisssion;
use App\Models\Regulation;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Link;
use App\Models\Incentive;
use App\Models\About;
use App\Models\Directory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Storage::deleteDirectory('posts');
       Storage::deleteDirectory('locations');
       Storage::deleteDirectory('incentives');
       Storage::deleteDirectory('huatulco');
       
       
       Storage::makeDirectory('posts');
       Storage::makeDirectory('locations');
       Storage::makeDirectory('incentives');
       Storage::makeDirectory('huatulco');

       $this->call(RoleSeeder::class);
        
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
        Category_L::factory(6)->create();
        Area::factory(5)->create();
        Tag::factory(8)->create();
        $this->call(PostSeeder::class);
        $this->call(ConfigSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(IncentiveSeeder::class);
        $this->call(HuatulcoSeeder::class);
        ServiceCategory::factory(5)->create();
        ServiceSubCategory::factory(20)->create();
        Service::factory(50)->create();
        Video::factory(30)->create();
        Regulation::factory(5)->create();
        Permisssion::factory(20)->create();
        Contact::factory(100)->create();
        Link::factory(12)->create();
        About::factory(1)->create();
        Directory::factory(6)->create();
        
    }
}
