<?php

namespace App\Http\Controllers;

use App\Models\AgendaMedica;
use App\Models\Cita;
use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedicoController extends Controller
{
    public function index()
    {
        // Obtener todos los Medicos
        $Medicos = Medico::all();
        // Pasar los Medicos a la vista
        return view('Doctors.doctors', compact('Medicos'));
    }

    public function create()
    {
        return  view('Doctors.add-doctor');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'especialidad' => 'nullable|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'nullable|string|max:100',
            // otros campos y reglas de validación
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->getMethod() == "POST") {
            $Medico = new Medico();
            $Medico->nombre = $request->nombre;
            $Medico->especialidad = $request->especialidad;
            $Medico->correo = $request->correo;
            $Medico->telefono = $request->telefono;

            if ($Medico->save()) {
                return redirect()->route('doctors.index')->with('success', 'Medico se guardo correctamente.');
            } else {
                return redirect()->route('doctors.index')->with('fail', 'Medico no se guardo correctamente.');
            }
        }
    }


    public function show($Medico_id)
    {
        $after_citas = Medico::getProxCitasByMedico($Medico_id);
        $before_citas = Medico::getCitasPasadasByMedico($Medico_id);
        $Medico = Medico::find($Medico_id);

        $citas = Cita::with('paciente', 'agendamedica.medico')
        ->where('citas.id_paciente', 5)
        ->orderBy('citas.fecha', 'asc')
        ->orderBy('citas.hora', 'asc')->get();

        return view('Doctors.doctor-profile', compact('Medico', 'after_citas', 'before_citas'));
    }

    public function edit($id)
    {
        $Medico = Medico::findOrFail($id);
        return view('Doctors.edit-doctor', compact('Medico'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'especialidad' => 'nullable|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'nullable|string|max:100',
            // otros campos y reglas de validación
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->getMethod() == "POST") {

            $Medico = Medico::find($id);

            $Medico->nombre = $request->nombre;
            $Medico->especialidad = $request->especialidad;
            $Medico->correo = $request->correo;
            $Medico->telefono = $request->telefono;

            if ($Medico->save()) {
                return redirect()->route('doctors.index')->with('success', 'Medico actualizado correctamente.');
            } else {
                return redirect()->route('doctors.index')->with('fail', 'Medico no se actualizo correctamente.');
            }
        }
    }

    public function delete($id)
    {
        $medico = Medico::find($id);
        if ($medico->delete()) {
            return redirect('/doctors')->with('success', 'Medico eliminado correctamente.');;
        } else {
            return redirect('doctors/view/' . $id)->with('fail', 'Medico no pudo ser eliminado.');;
        }
    }
}
