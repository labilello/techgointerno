<div x-data={isVisible:false} class="mb-1">
    <button @click="isVisible=!isVisible" wire:click="getFiles" type="button" class="outline-none w-full py-1 px-3 bg-blue-500 text-gray-200 border-2 border-blue-500 rounded-md flex justify-between transition duration-500 ease-in-out hover:bg-blue-700">
        <p class="font-semibold text-sm md:text-base">{{ $photo->order }}</p>
        <i class="fas fa-caret-down text-lg md:text-xl"></i>
    </button>
    <div :class="{'px-3 py-2 h-auto opacity-100': isVisible, 'p-0 opacity-0 h-0': !isVisible }" class="text-sm md:text-base text-gray-600 border-blue-200 rounded-b border-2 border-t-0 mx-px bg-blue-200 overflow-hidden transition-all duration-500 ease-out">

        <div wire:loading class="items-center font-medium w-full">
            <img src="{{ asset('resource/oval.svg') }}" alt="" class="mr-2 inline-block transition-all ease-in-out duration-150 cursor-not-allowed">
            Cargando archivos...
        </div>

        <ul wire:loading.remove class="">
            @foreach($files as $file)
                <a href="{{ route('files.orderFiles.show', ['order' => $photo->order, 'filename' => $file] )}}" target="_blank" class="flex justify-between mb-1 hover:text-tertiary-dark hover:font-bold">
                    <p>{{ $file }}</p>
                    <i class="fas fa-file-download text-lg"></i>
                </a>
            @endforeach

            @empty($files)
                No se encontraron archivos
            @endempty
        </ul>
    </div>
</div>
