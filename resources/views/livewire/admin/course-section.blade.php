<div class="mt-4">

    <h2 class="text-base font-semibold">Lecciones del curso</h2>
    <hr class="mt-3 mb-6 ">

    @foreach($course->sections as $item)
        <livewire:admin.section-item :section="$item" :wire:key="$item->id">
    @endforeach

    <div x-data="{open: false}">
        <p x-show="!open"  x-on:click=" open = true " class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva sección
        </p>

        <div x-show="open" class="bg-gray-100 mb-3 px-4 py-3 shadow w-full mt-3">
            <h4 class="text-lg mb-3">Agregar nueva sección</h4>
            <form  class="" action="">
                <div class="flex items-center justify-between">
                    <input wire:model="name" class="input-form mr-8" type="text" placeholder="Ingrese el nombre de la sección">
                </div>
                @error('name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </form>
            <div class="flex items-center justify-end mt-3">
                <button x-on:click=" open = false " class="btn btn-secondary mr-2">Cancelar</button>
                <button wire:click="store" class="btn btn-primary">Agregar</button>
            </div>
        </div>

    </div>
</div>
