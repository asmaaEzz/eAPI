<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','detail','price','stock','discount'];
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}