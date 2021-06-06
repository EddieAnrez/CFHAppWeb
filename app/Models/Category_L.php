<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_L extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }

} 
