<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{   
    use HasFactory;

    public function users(){
        return $this->belongsToMany(login::class , 'wishlists' , 'product_id', 'user_id');
        }
}



