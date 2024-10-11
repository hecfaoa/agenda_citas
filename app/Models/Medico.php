<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'especialidad',
        'correo',
        'telefono',
    ];

    static public function getProxCitasByMedico($id)
    {
        $results = Medico::join('agendamedica', 'agendamedica.id_medico', '=', 'medicos.id')  
            ->join('citas', 'citas.id_turno', '=', 'agendamedica.id_turno')
            ->join('pacientes', 'pacientes.id', '=', 'citas.id_paciente')
            ->select(
                'citas.*',               
                'pacientes.nombre as p_nombre',
                'pacientes.apellido as p_apellido',
                'pacientes.telefono as p_telefono',
                'pacientes.correo as p_correo',
            )
            ->where('medicos.id', $id)
            ->where('citas.fecha','>',date("Y-m-d")) 
          //  ->where('citas.hora','>=',date("H:i:s")) 
            ->orderBy('citas.fecha', 'asc')
            ->orderBy('citas.hora', 'asc')->get();

            return $results;
    }
    static public function getCitasPasadasByMedico($id)
    {
        $results = Medico::join('agendamedica', 'agendamedica.id_medico', '=', 'medicos.id')  
        ->join('citas', 'citas.id_turno', '=', 'agendamedica.id_turno')
        ->join('pacientes', 'pacientes.id', '=', 'citas.id_paciente')
        ->select(
            'citas.*',               
            'pacientes.nombre as p_nombre',
            'pacientes.apellido as p_apellido',
            'pacientes.telefono as p_telefono',
            'pacientes.correo as p_correo',
        )
        ->where('medicos.id', $id)
        ->where('citas.fecha','<=',date("Y-m-d")) 
        ->orderBy('citas.fecha', 'asc')
        ->orderBy('citas.hora', 'asc')->get();

            return $results;
    }
}
