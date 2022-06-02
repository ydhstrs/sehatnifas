<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class UserResult extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
    ];

    public function answere(){
        return $this->hasMany(UserAnswere::class,'id','user_result_id');
    }

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
