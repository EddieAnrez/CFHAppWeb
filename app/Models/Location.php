<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }
   
    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }


    public function category(){
        return $this->belongsTo(Category_L::class);
    }



   




    //Relacion Polimorfica uno a uno

    public function image(){
        return $this->morphOne(ImageLocation::class,'imageable');
    } 


}
 