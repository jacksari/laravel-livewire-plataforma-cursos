<div>
    <div class="bg-gray-100 mt-3 px-4 py-3 shadow" >
        <h4 class="cursor-pointer">Descripción</h4>
        <hr class="my-2">

        <div>
            @if($lesson->description)
                <form wire:submit.prevent="update">
                    <textarea placeholder="Ingrese aquí la descripción de la lección" wire:model="description.name" class="input-form h-20 input-lesson"></textarea>
                    @error('description.name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <div class="flex items-center justify-end">
                        <button wire:click="destroy" type="button" class="btn mr-2">
                            <i class="far fa-trash-alt mr-2"></i>
                            Eliminar
                        </button>
                        <button  type="submit" class="btn">
                            <i class="far fa-edit mr-2"></i>
                            Actualizar
                        </button>
                    </div>
                </form>
            @else
                <div x-data="{open: false}">
                    <p x-show="!open"  x-on:click=" open = true " class="flex items-center cursor-pointer">
                        <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
                        Agregar descripción
                    </p>
                    <div x-show="open">
                        <textarea placeholder="Ingrese aquí la descripción de la lección" wire:model="name" class="input-form h-20 input-lesson"></textarea>
                        @error('name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                        <div class="flex items-center justify-end">

                            <button x-on:click=" open = false "  class="btn mr-2">
                                <i class="far fa-edit mr-2"></i>
                                Cancelar
                            </button>
                            <button wire:click="store"  class="btn">
                                <i class="far fa-edit mr-2"></i>
                                Guardar
                            </button>
                        </div>
                    </div>
                </div>

            @endif
        </div>
    </div>

</div>
