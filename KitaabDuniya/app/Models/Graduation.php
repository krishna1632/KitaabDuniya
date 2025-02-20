<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class Graduation extends Model
{
    use HasFactory;
    protected $table = "graduations";
    protected $fillable = ['userId', 'name', 'semester','author', 'university', 'price', 'photos', 'description', 'status','is_sold'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
