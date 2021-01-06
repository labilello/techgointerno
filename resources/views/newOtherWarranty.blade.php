<x-app-layout>
    <x-slot name="header">
        {{ __('Otras garantías / Nuevo') }}
    </x-slot>

    <form class="max-w-7xl mx-auto sm:px-6 lg:px-8" method="POST" action="{{ route('warranty.addother.post') }}">
        @csrf
        <input type="text" name="name" placeholder="Nombre..." class="block">
        <input type="text" name="phones[1][description]" placeholder="Description 1..." class="block">
        <input type="text" name="phones[1][value]" placeholder="Telefono 1..." class="block">
        <input type="text" name="phones[2][description]" placeholder="Description 2..." class="block">
        <input type="text" name="phones[2][value]" placeholder="Telefono 2..." class="block">
        <input type="text" name="emails[1][description]" placeholder="Description 1..." class="block">
        <input type="text" name="emails[1][value]" placeholder="Email 1..." class="block">
        <input type="text" name="pages[1][description]" placeholder="Description 1..." class="block">
        <input type="text" name="pages[1][value]" placeholder="Pagina 1..." class="block">
        <input type="text" name="pages[2][description]" placeholder="Description 2..." class="block">
        <input type="text" name="pages[2][value]" placeholder="Pagina 2..." class="block">
        <input type="submit" value="Enviar" class="block">
    </form>
</x-app-layout>

