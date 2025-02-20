<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class General extends Model
{
    use HasFactory;
    protected $table = "generals";
    protected $fillable = ['userId', 'name', 'author', 'price', 'photos', 'description', 'status','is_sold'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
