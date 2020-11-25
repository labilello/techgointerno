<div>
    @livewire('upload-file.filter')

    <div class="grid grid grid-cols-3 gap-4">
        @foreach($directories as $directory)
            @livewire('upload-file.details', ['order' => $directory] )
        @endforeach

        @empty(count($directories))
            <p class="col-span-3">No se han encontrado ordenes en la busqueda.</p>
        @endempty
    </div>



</div>
