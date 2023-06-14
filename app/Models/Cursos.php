<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = ['nome', 'areas_id', 'desc', 'aprendizado', 'ativo', 'is_framework'];

    public function areasRelacionamento(){
        return $this->hasOne(Areas::class, 'id', 'areas_id');
    }
    public function modulosRelacionamento(){
        return $this->hasMany(Modulos::class, 'cursos_id', 'id');
    }
    public function epsodiosRelacionamento(){
        return $this->hasMany(Episodios::class, 'cursos_id', 'id');
    }
}
