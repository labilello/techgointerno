<div x-data={isVisible:false} class="">
    <button @click="isVisible=!isVisible" wire:click="getFiles" type="button" class="outline-none w-full py-2 px-3 bg-blue-500 text-gray-200 border-2 border-blue-500 rounded-md flex justify-between transition duration-500 ease-in-out hover:bg-blue-700">
        <p class="font-semibold">{{ $order }}</p>
        <i class="fas fa-caret-down text-xl"></i>
    </button>
    <div :class="{'px-3 py-2 h-auto opacity-100': isVisible, 'p-0 opacity-0 h-0': !isVisible }" class="border-blue-200 rounded-b border-2 border-t-0 mx-px bg-blue-200 overflow-hiddentransition-all duration-500 ease-out">

        <div wire:loading class="items-center text-base font-medium w-full">
            <img src="{{ asset('resource/oval.svg') }}" alt="" class="mr-2 inline-block transition ease-in-out duration-150 cursor-not-allowed">
            Cargando archivos...
        </div>

        <ul wire:loading.remove class="primary">
            @foreach($files as $file)
                <li class="flex justify-between mb-1">
                    <p>{{ $file }}</p>
                    <a href="{{ route('images.orderFiles.show', ['order' => $order, 'filename' => $file] )}}" target="_blank"><i class="fas fa-file-download text-lg"></i></a>
                </li>
            @endforeach

            @empty($files)
                No se encontraron archivos
            @endempty
        </ul>
    </div>
</div>
