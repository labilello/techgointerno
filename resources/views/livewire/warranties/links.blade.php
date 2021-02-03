<div class="mb-4">
    <livewire:warranties.element-header :description="'Enlaces utiles'"/>

    <!-- BODY -->
    <ul class="">
        @foreach($links as $n=>$link)
            <li class="flex text-sm mb-1">
                <input class="rounded py-1 px-2 w-full border-2 border-solid" placeholder="Descripcion....." value="{{ $link['description'] }}" wire:model="links.{{$n}}.description" required>
                <input class="rounded py-1 px-2 w-full border-2 border-solid" placeholder="Enlace.." value="{{ $link['description'] }}" wire:model="links.{{$n}}.value" required>
                <button type="button" class="px-2 text-center text-red-600 font-extrabold" wire:click="removeLine({{$n}})">&cross;</button>
            </li>
        @endforeach
    </ul>
</div>
