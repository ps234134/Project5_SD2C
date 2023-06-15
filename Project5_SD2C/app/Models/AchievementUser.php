<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AchievementUser extends Pivot
{
    use HasFactory;

    protected $table = 'achievements_users';
}
