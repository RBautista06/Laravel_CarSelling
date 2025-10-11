<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    // this will make not delete in the database but will fill the deleted_at column
    use SoftDeletes;
    
}
