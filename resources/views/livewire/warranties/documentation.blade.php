<div class="mb-4">
    <livewire:warranties.element-header :description="'Documentación necesaria'"/>

    <!-- BODY -->
    <ul class="">
        @foreach($documents as $n=>$document)
            <li class="flex text-sm mb-1">
                <input type="text" placeholder="Documento requerido.." value="{{ $document['value'] }}" wire:model="documents.{{$n}}.value" class="flex-1 rounded py-1 px-2 border-2 border-solid">
                <button type="button" class="px-2 text-center text-red-600 font-extrabold" wire:click="removeLine({{$n}})">&cross;</button>
            </li>
        @endforeach
    </ul>
</div>
