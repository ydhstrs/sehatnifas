<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswere extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'kuesioner_id',
        'user_result_id',
        'answere',
    ];

    public function kuesioners(){
        return $this->hasOne(kuesioner::class,'id','kuesioner_id');
    }

    public function user(){
        return $this->hasOne(UserResult::class,'id','user_result_id');
    }
}
