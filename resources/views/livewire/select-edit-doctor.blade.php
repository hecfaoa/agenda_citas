<div>
    <label for="doctorSelect">Search Doctor </label>

    <select name="id_medico" wire:model.live="medicos" class="form-control select">
        @foreach ($medicos as $option)
            <option value="{{ $option->id }}"
                {{ $this->id_medico == $option->id ? 'selected' : '' }}
                > {{ $option->especialidad }} {{ $option->nombre }}</option>
        @endforeach
    </select>
</div>
