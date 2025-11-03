<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilar extends Model
{
    use HasFactory;


    protected $fillable = [
        'pilar_1',
        'pilar_2',
        'pilar_3',
        'pilar_4',    
        'pilar_5',
        'pilar_6',
       
    ];

    public function servidor()
    {
        return $this->belongsTo(Servidores::class, 'servidores_id');
    }
}
