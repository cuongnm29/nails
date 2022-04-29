<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vourcher extends Model
{
    use HasFactory;
    public $table = 'voucher';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
       'name',
       'discount',
       'status',
       'expried',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
