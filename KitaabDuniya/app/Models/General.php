<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class General extends Model
{
    use HasFactory;
    protected $table = "generals";
    protected $fillable = ['userId', 'name', 'author', 'price', 'photos', 'description', 'status'];
}
