<?php

namespace App\Models\Mongo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class distance_2d extends Model
{

    use HasFactory;
    protected $collection = 'Distance_2d';
    protected $connection = 'mongodb';

}
