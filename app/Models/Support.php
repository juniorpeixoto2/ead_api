<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'lesson_id', 'description', 'status'];

    public $statusOption = [
        'P' => 'Pendente, Aguardando Professor',
        'A' => 'Aguardando Aluno',
        'C' => 'Finalizado',
    ];
}
