<select wire:model="selectedOption1" name="especialidad" class="form-control select">
    @foreach ($options1 as $option)
        <option>{{ $option }}</option>
    @endforeach
</select>