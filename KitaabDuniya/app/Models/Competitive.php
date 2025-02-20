<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Competitive extends Model
{
    use HasFactory;
    protected $table = "competitives";
    protected $fillable = ['userId', 'name','exam', 'author', 'price', 'photos', 'description', 'status'];
}
