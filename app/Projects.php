<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    protected $fillable = [
        'name', 'client_id', 'estimated_cost', 'price', 'story_points_est', 'story_points_real', 'description',
    ];
}
