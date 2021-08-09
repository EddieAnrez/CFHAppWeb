<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huatulco extends Model
{
    use HasFactory;

    protected $table = 'huatulco';

    protected $guarded=['id', 'created_at', 'updated_at'];
 

   /*  public function getRouteKeyName()
    {
        return "slug";
    } */

    public function image(){
        return $this->morphOne(HuatulcoImage::class, 'imageable');
    }
}
