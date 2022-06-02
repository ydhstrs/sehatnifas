<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kuesioner extends Model
{
    use HasFactory;
    protected $fillable = [
        'soal',
        'jawaban',
        'opsi1',
        'opsi2',
        'opsi3',
        'opsi4',
    ];

    public function userAnswere(){
        return $this->hasMany(CasePivot::class,'kuesioner_id','id');
    }
}
