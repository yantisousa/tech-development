<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'cursos_id'];

    public function epsodiosRelacionamento(){
        return $this->hasMany(Episodios::class, 'modulos_id', 'id');
    }
    public function cursoRelacionamento()
    {
        return $this->hasOne(Cursos::class, 'id', 'cursos_id');    
    }
}
