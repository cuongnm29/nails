<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = [
        'name','email','rate','content' ,'accountNumber','status','created_at','updated_at','deleted_at'
   ];
   public function member()
   {
       return $this->belongsTo(Member::class, 'userid');
   }
}
