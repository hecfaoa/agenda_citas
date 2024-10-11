<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
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
        'apellido',
        'correo',
        'telefono',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class,'id_paciente');
    }

    static public function getCitasByPacienteAndDate($id, $fecha)
    {
        date_default_timezone_set('America/Bogota');

        $results = Paciente::join('citas', 'pacientes.id', '=', 'citas.id_paciente')
            ->join('agendamedica', 'agendamedica.id_turno', '=', 'citas.id_turno')
            ->join('medicos', 'agendamedica.id_medico', '=', 'medicos.id')
            ->select(
                'citas.*',               
                'medicos.nombre as dr_nombre',
                'medicos.especialidad as dr_especialidad',
                'medicos.id as dr_id',
            )
            ->where('id_paciente', $id)
            ->where('citas.fecha',$fecha) 
            ->where('citas.hora','>=',date("H:i:s")) 
            ->orderBy('citas.fecha', 'asc')
            ->orderBy('citas.hora', 'asc')->get();

            return $results;
    }

    static public function getProxCitasByPaciente($id)
    {
        date_default_timezone_set('America/Bogota');

        $results = Paciente::join('citas', 'pacientes.id', '=', 'citas.id_paciente')
            ->join('agendamedica', 'agendamedica.id_turno', '=', 'citas.id_turno')
            ->join('medicos', 'agendamedica.id_medico', '=', 'medicos.id')
            ->select(
                'citas.*',               
                'medicos.nombre as dr_nombre',
                'medicos.especialidad as dr_especialidad',
                'medicos.id as dr_id',
            )
            ->where('id_paciente', $id)
            ->where('citas.fecha','>',date("Y-m-d")) 
          //  ->where('citas.hora','>=',date("H:i:s")) 
            ->orderBy('citas.fecha', 'asc')
            ->orderBy('citas.hora', 'asc')->get();
            return $results;
    }
    static public function getCitasPasadasByPaciente($id)
    {
        date_default_timezone_set('America/Bogota');

        $results = Paciente::join('citas', 'pacientes.id', '=', 'citas.id_paciente')
            ->join('agendamedica', 'agendamedica.id_turno', '=', 'citas.id_turno')
            ->join('medicos', 'agendamedica.id_medico', '=', 'medicos.id')
            ->select(
                'citas.*',               
                'medicos.nombre as dr_nombre',
                'medicos.especialidad as dr_especialidad',
                'medicos.id as dr_id',
            )
            ->where('id_paciente', $id)
            ->where('citas.fecha','<=',date("Y-m-d")) 
            ->orderBy('citas.fecha', 'desc')
            ->orderBy('citas.hora', 'desc')->get();

            return $results;
    }
}
