<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // login relation with products
    public function products(){
    return $this->belongsToMany(product::class , 'wishlists' , 'user_id', 'product_id');
    }
}




