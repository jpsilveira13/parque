<?php

namespace parque\Models;

use Illuminate\Database\Eloquent\Model;

class Barraqueiro extends Model
{
    protected $table = 'barraqueiro';


    protected $fillable = [
        'nome',
        'tipo_id',
        'tel',
        'cpf',
        'cidade',
        'valor_pago',
        'valor_receber',
        'valor_total',
        'url_image',
        'dia_pagamento',
        'prazo',
        'tipo_id',
    ];
}
