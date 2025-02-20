<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Graduation extends Model
{
    use HasFactory;
    protected $table = "graduations";
    protected $fillable = ['userId', 'name', 'semester','author', 'university', 'price', 'photos', 'description', 'status'];
}
