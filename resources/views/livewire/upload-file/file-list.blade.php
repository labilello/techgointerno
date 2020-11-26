<div>
    @livewire('upload-file.filter')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-0 md:gap-4 mb-2 md:mb-0">
        @foreach($directories as $directory)
            @livewire('upload-file.details', ['order' => $directory] )
        @endforeach

        @empty(count($directories))
            <p class="col-span-3">No se han encontrado ordenes en la busqueda.</p>
        @endempty
    </div>



</div>
