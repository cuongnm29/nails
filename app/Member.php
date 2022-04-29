<?php


namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'member';

    protected $guard = 'member';

    protected $fillable = [
        'firstname','lastname','phone','birthday', 'email', 'password','photo','point','numberAccount'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
