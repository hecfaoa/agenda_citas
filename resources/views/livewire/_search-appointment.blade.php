<div>
    <input type="search" wire:model.live="search" placeholder="Busca..." class="border rounded p-2">
{{$search}}
    {{-- @if($search) --}}
        <ul class="mt-2">
            {{-- @if(count($Citas) > 0) --}}
                @foreach($Citas as $resultado)
                    <li>{{ $resultado->id }}</li>
                @endforeach
            {{-- @else --}}
                <li>No se encontraron resultados.</li>
            {{-- @endif --}}
        </ul>
    {{-- @endif --}}
</div>
