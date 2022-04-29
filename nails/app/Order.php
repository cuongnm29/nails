<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $fillable = [
        'lastname','firstname','email','phone','catid','note','dateOrder','timeOrder','accountNumber','vourcherId' ,'created_at','updated_at','deleted_at'
   ];
   public function category()
   {
       return $this->belongsTo(Category::class, 'catid');
   }
   public function vourcher()
   {
       return $this->belongsTo(Vourcher::class, 'vourcherId');
   }
   public function member()
   {
       return $this->belongsTo(Member::class, 'userid');
   }
}
