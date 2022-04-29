<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mail extends Model
{
    use HasFactory,SoftDeletes;
    public $table = 'mail';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'displayname',
        'driver',
        'host',
        'port',
        'username',
        'password',
        'encryption',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
