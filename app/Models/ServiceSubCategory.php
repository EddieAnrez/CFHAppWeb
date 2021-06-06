<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    use HasFactory;
    protected $guarded=['id', 'created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(ServiceCategory::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
