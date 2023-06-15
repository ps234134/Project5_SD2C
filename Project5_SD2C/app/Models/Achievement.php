<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Achievement extends Model
{
    use HasFactory;

    protected $fillable = ["name", "date", "starttime", "endtime", "amount", "user_id"];

    public function Users()
    {
        return $this->belongsTo(User::class, 'achievements_users')
            ->using(AchievementUser::class);
    }

    public function Exercise()
    {
        return $this->belongsTo((Exercise::class));
    }

}
