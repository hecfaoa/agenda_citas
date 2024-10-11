<div>
<label for="patientSelect" >Search Patient </label>

<select name="patientSelect" wire:model.live="pacientes" class="form-control select" >
    @foreach ($pacientes as $option)
        <option value="{{$option->id}}"> {{ $option->apellido}} {{ $option->nombre}}</option>
    @endforeach
</select>
</div>