<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacienteController extends Controller
{
    public function index()
    {
        // Obtener todos los pacientes
        $pacientes = Paciente::all();

        // Pasar los pacientes a la vista
        return view('Patients.patients', compact('pacientes'));
    }

    public function create()
    {
        return  view('Patients.add-patient');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'apellido' => 'nullable|string|max:50',
            'telefono' => 'nullable|string|max:50',
            'correo' => 'nullable|string|max:100',
            // otros campos y reglas de validación
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->getMethod() == "POST") {
            $paciente = new Paciente();
            $paciente->nombre = $request->nombre;
            $paciente->apellido = $request->apellido;
            $paciente->correo = $request->correo;
            $paciente->telefono = $request->telefono;

            if ($paciente->save()) {
                return redirect()->route('patients.index')->with('success', 'Paciente se guardo correctamente.');
            } else {
                return redirect()->route('patients.index')->with('fail', 'Paciente no se guardo correctamente.');
            }
        }
    }
    
    public function search(Request $request)
    {
        // $query = Cita::with(['paciente', 'medico']);
        $query = Cita::with('paciente', 'agendamedica.medico');
           // ->where('citas.id_paciente', $paciente_id)
            // ->orderBy('citas.fecha', 'asc')
            // ->orderBy('citas.hora', 'asc')->get();

        if ($request->has('fecha')) {
            $query->whereDate('citas.fecha', $request->input('fecha'));
        }

        if ($request->has('id_paciente')) {
            $query->where('citas.id_paciente', $request->input('id_paciente'));
            //$query->where('id_paciente', $request->input('id_paciente'));
        }

     

        $citas = $query->get();

        return response()->json($citas);
    }
    
    public function show($paciente_id)
    {
        $after_citas = Paciente::getProxCitasByPaciente($paciente_id);
        $before_citas = Paciente::getCitasPasadasByPaciente($paciente_id);

        $paciente = Paciente::find($paciente_id);
        $citas = Cita::with('paciente', 'agendamedica.medico')
            ->where('citas.id_paciente', $paciente_id)
            ->orderBy('citas.fecha', 'asc')
            ->orderBy('citas.hora', 'asc')->get();


        return view('Patients.patient-profile', compact('paciente', 'after_citas', 'before_citas'));
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('Patients.edit-patient', compact('paciente'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'apellido' => 'nullable|string|max:50',
            'telefono' => 'nullable|string|max:50',
            'correo' => 'nullable|string|max:100',
            // otros campos y reglas de validación
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->getMethod() == "POST") {

            $paciente = Paciente::find($id);

            $paciente->nombre = $request->nombre;
            $paciente->apellido = $request->apellido;
            $paciente->correo = $request->correo;
            $paciente->telefono = $request->telefono;

            if ($paciente->save()) {
                return redirect()->route('patients.index')->with('success', 'Paciente actualizado correctamente.');
            } else {
                return redirect()->route('patients.index')->with('fail', 'Paciente no se actualizo correctamente.');
            }
        }
    }

    public function delete($id)
    {
        $paciente = Paciente::find($id);
        if ($paciente->delete()) {
            return redirect('/patients')->with('success', 'Paciente eliminado correctamente.');;
        } else {
            return redirect('patients/view/' . $id)->with('fail', 'Paciente no pudo ser eliminado.');;
        }
    }
}
