<div class="mb-4">
    <livewire:warranties.element-header :description="'Contacto Externo'"/>

    <!-- BODY -->
    <ul class="">
        @foreach($contacts as $n=>$contact)
            <li class="flex text-sm mb-1">
                <textarea rows="3" placeholder="Descripcion del contacto.." value="{{ $contact['description'] }}" wire:model="contacts.{{$n}}.description" class="resize-none break-words rounded py-1 px-2 border-2 border-solid" required></textarea>
                <div class="mx-2">
                    <input class="rounded py-1 px-2 w-full border-2 border-solid mb-1" placeholder="Numero/link..." value="{{ $contact['value'] }}" wire:model="contacts.{{$n}}.value" required>
                    <select class="rounded py-1 px-2 w-full border-2 border-solid" wire:model="contacts.{{$n}}.type" required>
                        <option>Telefono</option>
                        <option>Link</option>
                    </select>
                </div>
                <button type="button" class="px-2 text-center text-red-600 font-extrabold" wire:click="removeLine({{$n}})">&cross;</button>
            </li>
        @endforeach
    </ul>
</div>
