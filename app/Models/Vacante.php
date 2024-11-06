<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $dates = ['ultimo_dia'];

    protected $fillable = [
        'titulo',
        'salario_id',
        'categoria_id',
        'modalidad_id',
        'ultimo_dia',
        'descripcion',
        'user_id',
        'tipo',
        'publicado'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function salario(){
        return $this->belongsTo(Salario::class);
    }

    public function modalidad(){
        return $this->belongsTo(Modalidad::class);
    }

    public function candidatos(){
        return $this->hasMany(Candidato::class)->orderBy('created_at', 'DESC');
    }

    public function reclutador(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
