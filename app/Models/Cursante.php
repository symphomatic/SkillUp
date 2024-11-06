<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursante extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'cursante_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

}
