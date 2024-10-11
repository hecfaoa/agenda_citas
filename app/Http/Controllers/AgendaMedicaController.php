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




            if ($request->dia_semana == 0 || $request->dia_semana == "0") {
                return redirect()->route('schedule.create')->with('fail', 'por favor selecciona un dia.');
            }
            if ($horaFormateadaIni >= $horaFormateadaEnd) {

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
        $agenda = AgendaMedica::findOrFail($id);
      //  dd($agenda);
        return view('Doctorschedule.edit-schedule', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        if ($request->getMethod() == "POST") {

            //cambiamos formato hora 24 

            $horaFormateadaIni = Cita::getFormatHora($request->hora_inicio);
            $horaFormateadaEnd = Cita::getFormatHora($request->hora_fin);




            if ($request->dia_semana == 0 || $request->dia_semana == "0") {
                return redirect()->route('schedule.create')->with('fail', 'por favor selecciona un dia.');
            }
            if ($horaFormateadaIni >= $horaFormateadaEnd) {

                return redirect()->route('schedule.index')->with('fail', 'Las horas seleccionadas son erroneas.');
            } else {
                //dd($request);
                $agenda = AgendaMedica::find($id);
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
