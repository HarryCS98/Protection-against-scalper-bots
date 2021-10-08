<?php

namespace App\Models\Mongo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Keyboard_time extends Model
{

    use HasFactory;
    protected $collection = 'Keyboard_time';
    protected $connection = 'mongodb';

}
