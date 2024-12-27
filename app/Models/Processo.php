<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    use HasFactory;
    protected $table = 'processos'; // Nome da tabela no banco

    protected $casts = [
        'items' => 'array',
    ];

    protected $fillable = [
        'tipo',
        'descricao',
        'status',
        'data',
       
    ];
    
    protected $date = ['date'];

  /*  public function user(){
        return $this->belongsTo('App\Models\User');
    } */
}
