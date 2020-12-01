<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    // protected $table = "your_custom_table_name"

    // columns that can be accessed 
    protected $fillable = ['title','date','preacher'];

    // columns that can be hiden
    // protected $hidden = [];

    // to stop created_at and updated_at
    public $timestamps = false;
    // use HasFactory;
}
