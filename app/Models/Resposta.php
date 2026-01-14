<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;

    // Define o nome da tabela caso o Laravel não identifique automaticamente
    protected $table = 'respostas';

    // Campos que podem ser preenchidos em massa (Mass Assignment)
    protected $fillable = [
        'servidor_id', 
        'pergunta_id', 
        'valor', 
        'classificacao_geral', 
        'comentarios'
    ];

    /**
     * Relacionamento: Uma resposta pertence a um formulário (o envio geral).
     */
    public function formulario()
    {
        return $this->belongsTo(Formulario::class);
    }

    /**
     * Relacionamento: Uma resposta pertence a uma pergunta específica.
     */
    public function pergunta()
    {
        return $this->belongsTo(Pergunta::class);
    }
}