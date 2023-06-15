<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Exercise extends Model
{
    protected $table = 'exercises';
    protected $fillable = ["name", "description_eng", "description_nld", "img"];

    public function Achievements()
    {
        return $this->belongsToMany(User::class);
    }
}
