<div class="mb-4">
    <livewire:warranties.element-header :description="'Acciones al recibir un cliente'"/>

    <!-- BODY -->
    <ul class="">
        @foreach($actions as $n=>$action)
            <li class="flex text-sm mb-1">
                <input type="text" placeholder="Destinado a.." value="{{ $action['type'] }}" wire:model="actions.{{$n}}.type" class="rounded py-1 px-2 border-2 border-solid">
                <input type="text" placeholder="Accion.." value="{{ $action['value'] }}" wire:model="actions.{{$n}}.value" class="flex-1 rounded py-1 px-2 border-2 border-solid">
                <button type="button" class="px-2 text-center text-red-600 font-extrabold" wire:click="removeLine({{$n}})">&cross;</button>
            </li>
        @endforeach
    </ul>
</div>
