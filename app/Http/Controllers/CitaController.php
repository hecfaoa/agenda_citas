<?php

namespace App\Http\Controllers;

use App\Models\AgendaMedica;
use App\Models\Cita;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CitaController extends Controller
{
    public function index()
    {
        // Obtener todos los pacientes
        //$citas = Cita::all();
        $citas = Cita::with('paciente', 'agendamedica.medico')->get();

        // Pasar los pacientes a la vista
        return view('Appointments.appointments', compact('citas'));
    }

    public function create()
    {
        return  view('Appointments.add-appointment');
    }

    public function store(Request $request)
    {
        if ($request->getMethod() == "POST") {
            //cambiamos formato fecha 

            $fechaFormateada = Cita::getFormatFecha($request->fecha, 'd/m/Y', 'Y-m-d');
            //cambiamos formato hora 24 

            $horaFormateada = Cita::getFormatHora($request->hora);

            //validamos la agenda del medico 

            $validateAgenda = Cita::validateAgendaByDayDoctor($request->fecha, $request->hora, $request->doctorSelect);

            if (Count($validateAgenda) > 0) {

                //validamos la cita del paciente 
                $validateCita = Cita::validateCitaByDayDate($request->fecha, $request->hora, $validateAgenda[0]->id_turno);

                if (Count($validateCita) > 0) {
                    return redirect()->route('appointments.create')->with('fail', 'Cita no se puede agendar ya esta asignada.');
                } else {

                    $cita = new Cita();
                    $cita->id_paciente = $request->patientSelect;
                    $cita->id_turno = $validateAgenda[0]->id_turno;
                    $cita->fecha = $fechaFormateada;
                    $cita->hora = $horaFormateada;
                    $cita->hora = 'Confirmada';

                    if ($cita->save()) {
                        return redirect()->route('appointments.index')->with('success', 'Cita se guardo correctamente.');
                    } else {
                        return redirect()->route('appointments.create')->with('fail', 'Cita no se guardo correctamente.');
                    }
                }
            } else {
                return redirect()->route('appointments.index')->with('fail', 'el doctor seleccionado no tiene agenda para ese dia.');
            }
        }
    }


    // public function show($cita_id)
    // {
    //     $cita = Cita::find($cita_id);
    //     return view('Appointments.appointment-profile', compact('cita', 'after_citas', 'before_citas'));
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

        return view('Appointments.edit-appointment', compact('cita', 'pacientes', 'medicos', 'formattedDate', 'estados'));
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
