<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use IntlDateFormatter;

class Cita extends Model
{
    use HasFactory;
    public $citas;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fecha',
        'hora',
        'estado',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id_paciente');
    }

    public function agendamedica()
    {
        return $this->belongsTo(AgendaMedica::class, 'id_turno');
    }


    static public function getFormatFecha($fecha,$formatoIn,$formatoOut)
    {

        // Crear un objeto DateTime a partir de la cadena
        $date = DateTime::createFromFormat($formatoIn, $fecha);

        // Verificar si la conversión fue exitosa
        if ($date !== false) {
            // Formatear la fecha en el formato 'Y-m-d'
            $formattedDate = $date->format($formatoOut);
        } else {
            $formattedDate = null;
        }
        return $formattedDate;
    }

    static public function getFormatHora($hora12)
    {

        // Crear un objeto DateTime a partir de la hora proporcionada
        $horafecha = DateTime::createFromFormat('h:i A', $hora12);

        // Verificar si se creó correctamente el objeto DateTime
        if ($horafecha) {
            // Formatear la hora en formato de 24 horas
            $hora24 = $horafecha->format('H:i');
        } else {
            $hora24 = null;
        }

        return $hora24;
    }

    static public function getDayByDate($fecha)
    {

        // Crea un objeto DateTime
        $date = DateTime::createFromFormat('d/m/Y', $fecha);

        // Utiliza IntlDateFormatter para obtener el nombre del día en español
        $formatter = new IntlDateFormatter(
            'es_ES', // Localización para español de España (puedes cambiarlo si lo deseas)
            IntlDateFormatter::FULL, // Tipo de fecha (FULL, LONG, MEDIUM, SHORT)
            IntlDateFormatter::NONE, // Tipo de hora (NONE, FULL, LONG, MEDIUM, SHORT)
            null, // Zona horaria (usa null para la zona horaria del sistema)
            IntlDateFormatter::GREGORIAN, // Calendario (GREGORIAN o TRADITIONAL)
            'eeee' // Patrones de fecha, 'eeee' obtiene el nombre completo del día
        );
        // Formatea la fecha
        if ($formatter->format($date)) {
            $nombre_dia = $formatter->format($date);
        } else {
            $nombre_dia = null;
        }

        return $nombre_dia;
    }


    static public function validateAgendaByDayDoctor($fecha, $hora, $doctor_id)
    {

        $hora24 = Cita::getFormatHora($hora);

        $nombre_dia =  Cita::getDayByDate($fecha);

        $results = AgendaMedica::select('agendamedica.*')
            ->where('id_medico', $doctor_id)
            ->where('dia_semana', ucfirst($nombre_dia))
            ->where('hora_inicio', '<=', $hora24)
            ->where('hora_fin', '>', $hora24)
            ->get();


        return $results;
    }


    static public function validateCitaByDayDate($fecha, $hora12, $turno_id)
    {
        $formattedDate = Cita::getFormatFecha($fecha,'d/m/Y','Y-m-d');

        $formattedHour = Cita::getFormatHora($hora12);

        $results = Cita::select('citas.*')
            ->where('id_turno', $turno_id)
            ->where('fecha', $formattedDate)
            ->where('hora', $formattedHour)
            ->get();

        return $results;
    }
}
