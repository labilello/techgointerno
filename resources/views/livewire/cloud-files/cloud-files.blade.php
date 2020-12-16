<div class="rounded bg-white py-3">
    <div class="flex px-5 items-center mb-3">
        @if($currentDirectoryString != 'Carpeta principal')
            <i class="fas fa-arrow-left mr-5 hover:bg-black hover:text-white rounded-full p-2 transition duration-100 ease-out sm:text-xl"
               wire:click="backDirectory( )"></i>
        @endif
        <h2 class="font-bold capitalize sm:text-xl">{{ $currentDirectoryString }}</h2>
    </div>

    <div class="w-full px-5 flex font-semibold">
        <p class="w-10/12 sm:w-7/12">Nombre</p>
        <p class="sm:w-3/12 hidden sm:block">Ultima modificación</p>
        <p class="w-2/12">&emsp;</p>
    </div>

    <div wire:loading class="py-2 w-full px-5">
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
        <span class="ml-2 text-base font-bold text-tertiary-dark">Examinando carpeta...</span>
    </div>

    @if($counter < 1)
        <div class="w-full px-5 mt-2" wire:loading.remove>
            No se encontraron archivos...
        </div>
    @else
        @foreach($directories as $directory)
            <div class="w-full h-11 hover:bg-red-300 cursor-pointer transition duration-500 ease-out px-5 relative" wire:loading.remove>
                <div class="w-10/12 h-full sm:w-7/12 flex items-center my-1">
                    <i class="fas fa-folder mr-2 text-3xl text-yellow-300 w-8 text-center"></i>
                    <div class="truncate">
                        {{ $directory['filename'] }}
                        <span class="block sm:hidden text-xs text-indigo-700">Ult. Modificación: {{ \Carbon\Carbon::createFromTimestamp($directory['lastmodif'], 'America/Argentina/Buenos_Aires')->isoformat('d MMMM YYYY') }}</span>
                    </div>
                </div>
                <div class="hidden sm:w-3/12">{{ \Carbon\Carbon::createFromTimestamp($directory['lastmodif'], 'America/Argentina/Buenos_Aires')->locale('es')->isoformat('d MMMM YYYY') }}</div>
                <div class="w-2/12"></div>
                <button type="button" class="absolute top-0 left-0 w-full h-full z-50" wire:click="searchDirectory('{{ $directory['directory'] }}')"></button>
            </div>
        @endforeach

{{--        @dd($files)--}}
        @foreach($files as $file)
            <div class="w-full h-11 flex items-center hover:bg-red-300 cursor-pointer transition duration-500 ease-out" wire:loading.remove>
                <div class="w-10/12 sm:w-7/12 flex my-1 pl-5">
                    <i class="fas
                        @if ( $file['extension'] == 'pdf' )
                            fa-file-pdf text-red-400
                        @elseif( $file['extension'] == 'docx' || $file['extension'] == 'docm' || $file['extension'] == 'dotx' || $file['extension'] == 'dotm' || $file['extension'] == 'doc' || $file['extension'] == 'dot' )
                            fa-file-word text-blue-400
                        @elseif( $file['extension'] == 'pptx' || $file['extension'] == 'pptm'|| $file['extension'] == 'potx' || $file['extension'] == 'potm' || $file['extension'] == 'ppam' || $file['extension'] == 'ppsx' || $file['extension'] == 'ppsm' || $file['extension'] == 'sldx' )
                            fa-file-powerpoint text-blue-400
                        @elseif( $file['extension'] == 'xlsx' || $file['extension'] == 'xlsm' || $file['extension'] == 'xltx' || $file['extension'] == 'xltm' || $file['extension'] == 'xlsb' || $file['extension'] == 'xlam' )
                            fa-file-excel text-green-400
                        @elseif( $file['extension'] == 'avi' || $file['extension'] == 'mp4' || $file['extension'] == 'mkv' || $file['extension'] == 'asf' || $file['extension'] == 'qt' || $file['extension'] == 'qtl' || $file['extension'] == 'mov' || $file['extension'] == 'mpeg' || $file['extension'] == 'webm' )
                            fa-file-video text-blue-400
                        @elseif( $file['extension'] == 'bmp' || $file['extension'] == 'gif' || $file['extension'] == 'jpeg' || $file['extension'] == 'png' || $file['extension'] == 'svg' || $file['extension'] == 'nef' )
                            fa-file-image text-blue-400
                        @else
                            fa-file-archive text-gray-400
                        @endif
                            mr-2 text-3xl w-8 text-center">
                    </i>
                    <div class="truncate">
                        {{ $file['filename'] }}
                        <span class="block sm:hidden text-xs text-indigo-700">Ult. Modificación: {{ \Carbon\Carbon::createFromTimestamp($file['lastmodif'], 'America/Argentina/Buenos_Aires')->isoformat('d MMMM YYYY') }}</span>
                    </div>
                </div>
                <div class="hidden sm:block sm:w-3/12">{{ \Carbon\Carbon::createFromTimestamp($file['lastmodif'], 'America/Argentina/Buenos_Aires')->isoformat('d MMMM YYYY') }} </div>
                <div class="text-center w-2/12">
                    <a href="{{ route('files.cloudFiles.show', ['directory' => $file['directory'] ] ) }}" class="hidden sm:inline bg-red-600 text-white px-3 py-2 rounded" download target="_blank">Descargar</a>
                    <a href="{{ route('files.cloudFiles.show', ['directory' => $file['directory'] ] ) }}" class="inline sm:hidden text-blue-600 text-lg px-3 py-2 rounded" download target="_blank"> <i class="fas fa-cloud-download-alt"></i> </a>
                </div>
            </div>
        @endforeach
    @endif
</div>
