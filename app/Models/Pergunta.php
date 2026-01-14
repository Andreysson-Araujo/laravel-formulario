<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    use HasFactory;

    protected $table = 'perguntas';
    protected $fillable = [
        'servidor_id', 
        'pergunta_id', 
        'valor', 
        'classificacao_geral', 
        'comentarios'
    ];

    public function pilar()
    {
        return $this->belongsTo(Pilar::class, 'pilar_id');
    }

    public function respostas()
    {
        return $this->hasMany(Resposta::class, 'pergunta_id');
    }
}
