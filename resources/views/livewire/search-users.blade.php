<div>
    <input wire:model.live="search" type="text" placeholder="Search users..."/>
 {{$search}}
    <ul>
        @foreach($users as $user)
            <li>{{ $user->username }}</li>
        @endforeach
    </ul>
</div>