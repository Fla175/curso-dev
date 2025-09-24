<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Definindo os campos que podem ser preenchidos via create() ou fill()
    protected $fillable = ['title', 'description', 'price', 'fabricant', 'created_at', 'updated_at'];
}
