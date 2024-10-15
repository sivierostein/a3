<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formando extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'ano',
        'semestre',
        'data_colacao',
        'curso_id',
    ];

    protected $casts = [
        'data_colacao' => 'date',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
