<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class Competitive extends Model
{
    use HasFactory;
    protected $table = "competitives";
    protected $fillable = ['userId', 'name','exam', 'author', 'price', 'photos', 'description', 'status','is_sold'];

    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
