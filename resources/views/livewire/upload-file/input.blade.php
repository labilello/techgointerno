<div>

    <div class="bg-indigo-600 text-white items-center mb-2 px-4 py-2 border border-transparent text-base leading-6 rounded-md font-medium w-full" wire:loading wire:target="inputTempFiles">
        <img src="{{ asset('resource/oval.svg') }}" alt="" class="mr-2 inline-block transition ease-in-out duration-150 cursor-not-allowed">
        Subiendo imagenes al servidor
    </div>

    @error('inputTempFiles.*')
        <div class="w-full bg-red-200 border border-red-700 text-red-800 rounded-sm py-3 px-4 mb-2">
            <span class="error">{{ $message }}</span>
        </div>
    @enderror

    <div>
        @if (session()->has('message'))
            <div class="@if(session()->has('type_message')) @if(session('type_message') == 'error') bg-red-200 border border-red-700 text-red-800 @endif @else bg-green-200 border-green-700 text-green-800 @endif w-full border rounded-sm py-3 px-4 mb-2">
                <span class="error">{{ session('message') }}</span>
            </div>
        @endif
    </div>

    <div class="relative flex flex-col flex-grow mb-3">
        <div class="flex flex-col w-full bg-white border-2 border-gray-300 border-solid rounded-md hover:shadow-outline-gray hover:cursor-pointer py-3 text-center">
            <input type="file" multiple
                   class="absolute inset-0 z-10 m-0 p-0 w-full h-full outline-none opacity-0 hover:cursor-pointer"
                   wire:model="inputTempFiles"
                   accept="image/*"
            >
            <i class="fas fa-cloud-upload-alt fa-3x text-currentColor"></i>
            <p class="text-gray-700">Suelta tus archivos aqui o haz clic en esta area.</p>
            <a href="javascript:void(0)" class="mt-3 mx-auto py-2 px-4 text-white text-center font-medium border border-transparent rounded-md outline-none bg-red-700">Selecciona tus archivos</a>
        </div>
    </div>

    <form wire:submit.prevent="storePhotos">
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">

            @if(count($tempFiles) > 0)
                <div class="flex col-span-2 sm:col-span-3 flex-no-wrap">
                    <label for="order" class="flex flex-col justify-center mb-0 -mr-px px-3 border rounded-l bg-gray-600 text-white text-center text-xs sm:text-sm">Numero de solicitud:</label>
                    <input type="text" wire:model="order" id="order" placeholder="20201006-000041" class="rounded-r py-1 flex-1 px-2 border-2 border-solid text-sm sm:text-base" required>
                </div>
            @endif


            @foreach($tempFiles as $index=>$item)
{{--            {{ $item->getFilename() }} - {{ $index }}--}}
                <div class="flex flex-col bg-white border border-red-400 border-solid rounded">
                    <div class="flex py-1 px-2 items-center bg-gray-100 shadow-xs mb-1">
                        <input class="text-xs sm:text-base flex-1 py-1 px-1 sm:px-2 truncate bg-transparent" type="text" name="filename[]" value="{{ $item->getClientOriginalName() }}">
{{--                        <input type="checkbox" class="ml-2">--}}
                    </div>
                    <div class="w-full h-20 sm:h-40 text-center mb-1">
                        <img src="{{ $item->temporaryUrl() }}" alt="" class="max-h-full mx-auto">
                    </div>
                </div>
            @endforeach

            @if(count($tempFiles) > 0)
                <input type="submit" value="Subir archivos"
                       class="col-span-2 sm:col-span-3 mt-3 py-2 px-4 text-white text-center font-medium border border-transparent rounded-md outline-none bg-green-700">
            @endif
        </div>
    </form>




</div>
