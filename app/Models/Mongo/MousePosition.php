<?php

namespace App\Models\Mongo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MousePosition extends Model
{
    use HasFactory;
    protected $collection = 'MousePosition';
    protected $connection = 'mongodb';
    protected $fillable = ['ip','url','pages'];
}
