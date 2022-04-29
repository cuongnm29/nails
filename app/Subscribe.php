<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;
    protected $table = 'subcribe';
    protected $fillable = [
       'email' ,'created_at','updated_at','deleted_at'
   ];
}
