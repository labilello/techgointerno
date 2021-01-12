<div>
    @livewire('upload-file.filter')

    <div class="py-2" wire:loading>
        <svg class="inline-flex" width="25" height="25" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#025aa5">
            <g fill="none" fill-rule="evenodd">
                <g transform="translate(1 1)" stroke-width="2">
                    <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                    <path d="M36 18c0-9.94-8.06-18-18-18">
                        <animateTransform
                            attributeName="transform"
                            type="rotate"
                            from="0 18 18"
                            to="360 18 18"
                            dur="1s"
                            repeatCount="indefinite"/>
                    </path>
                </g>
            </g>
        </svg>
        <span class="ml-2 text-base font-bold text-tertiary-dark">Buscando archivos...</span>
    </div>

    <div wire:loading.remove class="grid grid-cols-1 md:grid-cols-3 gap-0 md:gap-4 mb-2 md:mb-0 text-xs">

        @foreach($photos as $photo)
            <livewire:upload-file.details :photo="$photo" :key="time().$photo->id"/>
        @endforeach

        @empty(count($photos))
            <p>No se han encontrado archivos en la busqueda.</p>
        @endempty
    </div>

</div>
