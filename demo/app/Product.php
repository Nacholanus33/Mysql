<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["name", "description", "price", "categories_id", "brands_id"];

}
