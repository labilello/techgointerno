<div>
{{--    <div class="flex justify-between mb-5">--}}
{{--        <input type="text" name="name" placeholder="Ingrese el nombre de la marca a crear..." class="flex-1 bg-transparent border-b-2 border-green-400 py-2 px-4 text-xl font-bold" @isset($warranty) value="{{ $warranty->name }}" @endisset required>--}}
{{--        <select name="group" class="ml-2 rounded py-1 px-2 border-2 border-solid" required>--}}
{{--            <option hidden value="">Seleccione tipo de garantía</option>--}}
{{--            @foreach($warrantyGroups as $group)--}}
{{--                <option value="{{ $group->id }}" @isset($warranty) @if($warranty->warranty_group_id == $group->id) selected @endif @endisset>{{ $group->name }}</option>--}}
{{--            @endforeach--}}
{{--        </select>--}}
{{--        <div class="ml-12 flex justify-between my-auto">--}}
{{--            <input type="submit" value="Crear marca" class="mr-2 py-2 px-4 bg-blue-500 text-white rounded-md">--}}
{{--            <input type="button" value="Borrar marca" class="py-2 px-4 bg-red-600 text-white rounded-md">--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="grid gap-4 grid-cols-12">

        <div class="col-span-12 md:col-span-8 col-start-1">  <!-- LADO IZQUIERDO -->
            <livewire:warranties.device-list/>

            <livewire:warranties.client-actions/>

            <livewire:warranties.documentation/>

        </div>

        <div class="col-span-12 md:col-span-4 md:col-start-9 col-start-1"> <!--  LADO DERECHO -->
            <h4 class="h4 text-success mb-3">Información adicional</h4>
            <livewire:warranties.external-contact/>

            <livewire:warranties.internal-contact/>

            <livewire:warranties.links/>

        </div>
    </div>
</div>
