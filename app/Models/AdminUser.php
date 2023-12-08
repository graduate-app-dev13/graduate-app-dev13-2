<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class AdminUser extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    
    protected $table = 'admin_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'admin_level',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
