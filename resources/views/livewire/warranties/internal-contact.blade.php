<div class="mb-4">
    <livewire:warranties.element-header :description="'Contacto Interno'"/>

    <!-- BODY -->
    <div class="grid grid-cols-2 gap-x-4 gap-y-2 bg-green-400 w-full h-48 overflow-y-scroll overscroll-contain text-sm px-4 mt-2 py-2 border boder-gray-300">
        @foreach($users as $n=>$user)
            <div class="flex items-center">
                <input type="checkbox" id="user-{{ $user->id }}">
                <label for="user-{{ $user->id }}" class="px-2 mr-2">{{ $user->name }}</label>
            </div>

{{--            <li class="flex text-sm mb-1">--}}
{{--                <select class="rounded py-1 px-2 w-full border-2 border-solid" wire:model="contacts.{{$n}}.id" required multiple>--}}
{{--                    <option value="" selected>Seleccione los usuarios</option>--}}
{{--                    @foreach($users as $user)--}}
{{--                        <option value="{{ $user->id }}">{{ $user->name }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--                <button type="button" class="px-2 text-center text-red-600 font-extrabold" wire:click="removeLine({{$n}})">&cross;</button>--}}
{{--            </li>--}}
        @endforeach

{{--        @foreach($contacts as $n=>$contact)--}}
{{--            @foreach($contact as $m=>$c)--}}
{{--        --}}
{{--                <p>{{ $n }} - {{ $m }} - {{ $c }}</p>--}}
{{--            @endforeach--}}

{{--            <p>{{ $n }} - {{ isset($contact->id) ? $contact->id : '' }}</p>--}}
{{--        @endforeach--}}
    </div>
</div>
