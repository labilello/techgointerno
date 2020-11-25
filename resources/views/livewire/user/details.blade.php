<div x-data={isVisible:false}>
    <button @click="isVisible=!isVisible" type="button" class="outline-none w-full mt-1 p-3 bg-gray-100 border-2 rounded-lg flex items-center transition duration-500 ease-in-out hover:bg-gray-300 ">
        <img class="h-10 w-10 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="Image" />
        <div class="ml-3 text-left">
            <h4 class="block font-semibold text-lg text-black">{{ $user->name }}</h4>
            <p class="text-sm text-gray-500">{{ $user->sector }} - {{ $user->store->name }}</p>
        </div>
    </button>
    <address :class="{'px-5 py-3 h-auto opacity-100': isVisible, 'p-0 opacity-0 h-0': !isVisible }" class="mx-1 -mt-px text-sm text-primary-light rounded bg-primary overflow-hidden grid grid-flow-row transition-all duration-500 ease-out">
        <div>
            <p class="font-semibold w-24 inline-block">Rol Sistema:</p>
            <span>{{ $user->role }}</span>
        </div>

        <div>
            <p class="font-semibold w-24 inline-block">Legajo:</p>
            <span>{{ $user->legajo }}</span>
        </div>

        <div>
            <p class="font-semibold w-24 inline-block">Email:</p>
            <span>{{ $user->email }}</span>
        </div>

        @foreach($user->phones as $phone)
            <div>
                <p class="font-semibold w-24 inline-block">Telefono:</p>
                <a href="tel:{{ $phone }}">{{ $phone }}</a>
                <i class="ml-2 fas fa-phone text-secondary"></i>
            </div>
        @endforeach

        @foreach($user->store->phones as $phone)
            <div>
                <p class="font-semibold w-24 inline-block">Telefono:</p>
                <a href="tel:{{ $phone }}">{{ $phone }} (Sucursal)</a>
                <i class="ml-2 fas fa-phone text-secondary"></i>
            </div>
        @endforeach
    </address>
</div>
