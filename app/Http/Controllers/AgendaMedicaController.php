<?php

namespace App\Http\Controllers;

use App\Models\AgendaMedica;
use App\Models\Cita;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AgendaMedicaController extends Controller
{
    public function index()
    {
        // Obtener todos los pacientes
        //$citas = Cita::all();
        $agenda = AgendaMedica::with('medico')->get();

        // Pasar los pacientes a la vista
        return view('Doctorschedule.schedule', compact('agenda'));
    }

    public function create()
    {
        return  view('Doctorschedule.add-schedule');
    }

    public function store(Request $request)
    {
// dd($request);
     
        if ($request->getMethod() == "POST") {
            
            //cambiamos formato hora 24 

            $horaFormateadaIni = Cita::getFormatHora($request->hora_inicio);
            $horaFormateadaEnd = Cita::getFormatHora($request->hora_fin);

            //validamos la agenda del medico 


            if ($request->dia_semana == 0 || $request->dia_semana == "0") {
                return redirect()->route('schedule.create')->with('fail', 'por favor selecciona un dia.');
            }
            if ($horaFormateadaIni == $horaFormateadaEnd) {

                return redirect()->route('schedule.index')->with('fail', 'Las horas seleccionadas son erroneas.');
            } else {
                //dd($request);
                $agenda = new AgendaMedica();
                $agenda->id_medico = $request->id_medico;
                $agenda->dia_semana = $request->dia_semana;
                $agenda->hora_inicio = $horaFormateadaIni;
                $agenda->hora_fin = $horaFormateadaEnd;

                if ($agenda->save()) {
                    return redirect()->route('schedule.index')->with('success', 'la agenda se guardo correctamente.');
                } else {
                    return redirect()->route('schedule.create')->with('fail', 'la agenda no se guardo correctamente.');
                }
            }
        }
    }


    // public function show($cita_id)
    // {
    //     $cita = Cita::find($cita_id);
    //     return view('Doctorschedule.appointment-profile', compact('cita', 'after_citas', 'before_citas'));
    // }

    public function edit($id)
    {
        // $cita = Cita::findOrFail($id);
        $cita = Cita::with('paciente', 'agendamedica.medico')->where('citas.id', $id)->get();
        $estados = ['Confirmada' => 'Confirmada', 'Cancelada' => 'Cancelada'];

        $pacientes = Paciente::all();
        $medicos = Medico::all();
        $formattedDate = Cita::getFormatFecha($cita[0]->fecha, 'Y-m-d', 'd/m/Y');

        //  dd($cita[0]->estado);
        // $medicos = AgendaMedica::with('medico')->get();

        return view('Doctorschedule.edit-appointment', compact('cita', 'pacientes', 'medicos', 'formattedDate', 'estados'));
    }

    public function update(Request $request, $id)
    {
        if ($request->getMethod() == "POST") {
            //cambiamos formato fecha 

            $fechaFormateada = Cita::getFormatFecha($request->fecha, 'd/m/Y', 'Y-m-d');
            //cambiamos formato hora 24 

            $horaFormateada = Cita::getFormatHora($request->hora);

            //validamos la agenda del medico 

            $validateAgenda = Cita::validateAgendaByDayDoctor($request->fecha, $request->hora, $request->doctorSelect);
            $citaActual = Cita::where('citas.id', $id)->get();

            if (Count($validateAgenda) > 0) {

                //validamos la cita del paciente 
                if (
                    $request->fecha != Cita::getFormatFecha($citaActual[0]->fecha, 'Y-m-d', 'd/m/Y')
                    || $request->hora != Cita::getFormatHora($citaActual[0]->hora)
                ) {
                    $validateCita = Cita::validateCitaByDayDate($request->fecha, $request->hora, $validateAgenda[0]->id_turno);

                    if (Count($validateCita) > 0 && $citaActual[0]->id_paciente != $validateCita[0]->id_paciente) {
                        return redirect()->route('appointments.index')->with('fail', 'Cita no se puede agendar ya esta asignada.');
                    } else {
                        $citaActual[0]->id_paciente = $request->patientSelect;
                        $citaActual[0]->id_turno = $validateAgenda[0]->id_turno;
                        $citaActual[0]->fecha = $fechaFormateada;
                        $citaActual[0]->hora = $horaFormateada;
                        $citaActual[0]->estado = $request->estado;
                    }
                }


                if ($citaActual[0]->save()) {
                    return redirect()->route('appointments.index')->with('success', 'Cita se guardo correctamente.');
                } else {
                    return redirect()->route('appointments.create')->with('fail', 'Cita no se guardo correctamente.');
                }

                //$validateCita = Cita::validateCitaByDayDate($request->fecha, $request->hora, $validateAgenda[0]->id_turno);


            } else {
                return redirect()->route('appointments.index')->with('fail', 'el doctor seleccionado no tiene agenda para ese dia.');
            }
        }
    }

    public function delete($id)
    {
        $user = cita::find($id);

        if ($user->delete()) {
            return redirect('/appointments')->with('success', 'Cita eliminada correctamente.');
        } else {
            return redirect('/appointments/view/' . $id)->with('fail', 'cita no pudo ser eliminada.');
        }
    }
}
