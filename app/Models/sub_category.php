<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_category extends Model
{
    use HasFactory;

    public function RAM(){
        return $this->hasMany(ram::class,'Category_id');
    }

}
