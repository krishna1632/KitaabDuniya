<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class School extends Model
{
    use HasFactory;
    protected $table = "schools";
    protected $fillable = ['userId', 'name', 'class', 'board', 'type', 'price', 'photos', 'description', 'status', 'is_sold'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
