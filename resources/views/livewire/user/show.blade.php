<div>
    @livewire('user.filter')

    {{ $users->links('vendor.pagination.tailwind') }}
    @foreach($users as $user)
        @livewire('user.details', ['user' => $user], key($user->name))
    @endforeach


    @empty(count($users))
        <p>No se han encontrado usuarios en la busqueda.</p>
    @endempty

</div>
