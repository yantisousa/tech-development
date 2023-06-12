<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = ['nome', 'areas_id'];

    public function areasRelacionamento(){
        return $this->hasOne(Areas::class, 'id', 'areas_id');
    }
}
