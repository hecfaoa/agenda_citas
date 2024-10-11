<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaMedica extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'agendamedica'; 
    protected $primaryKey = 'id_turno';
    protected $keyType = 'int';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'dia_semana',
        'hora_inicio',
        'hora_fin',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class,'id_turno');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico');
    }
}
