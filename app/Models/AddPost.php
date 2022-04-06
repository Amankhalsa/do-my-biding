<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPost extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userdetail(){
        return $this->belongsTo(User::class,'user_account_id' ,'id');
      }
}
















