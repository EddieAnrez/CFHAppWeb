<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulation extends Model
{
    use HasFactory;

    protected $guarded=['id', 'created_at', 'updated_at'];

    public function getRouteKeyName()
    {
        return "slug";
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
