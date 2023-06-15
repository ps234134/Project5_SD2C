<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = ["name", "date", "starttime", "endtime", "amount", "user_id"];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
