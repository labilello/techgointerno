<div class="hidden md:flex relative bg-primary border-b border-white items-center ">
    <div class="py-3 md:py-0 px-6 md:px-4 md:mx-auto">
        <a href="{{ route('index') }}">
            <img class="h-8 block w-auto" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />
        </a>
    </div>

    <div class="flex-1">
        <div class="flex justify-end items-center w-full pr-4 py-2">
            {{-- TOP (NAV - USER) --}}

            <div class="flex items-center text-sm md:text-base text-white transition duration-150 ease-in hover:text-teal-300">
                <i class="fas fa-backward md:text-lg mr-2"></i>
                <a href="https://www.techgo.com.ar">Volver a techgo.com.ar</a>
            </div>

        </div>
        <div class="block" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>
        <div class="flex justify-end text-sm md:text-base py-3 text-secondary pr-4 mr-2">
            {{ $pagename }}
        </div>
    </div>

</div>

<div class="block md:hidden relative bg-primary border-b">
    <div class="w-full" style="background: linear-gradient(to right,#00d9ff 0,#01ffb3 100%); height: 2px"></div>

    <div class="py-3 px-6 flex justify-between items-center w-full">
        <a href="{{ route('index') }}">
            <img class="h-6" src="{{ asset('resource/techgo-logo.svg') }}" alt="Logo" />
        </a>

        <div class="flex items-center text-sm text-white transition duration-150 ease-in hover:text-teal-300">
            <i class="fas fa-backward mr-2"></i>
            <a href="https://www.techgo.com.ar">Volver a techgo.com.ar</a>
        </div>
    </div>

</div>
