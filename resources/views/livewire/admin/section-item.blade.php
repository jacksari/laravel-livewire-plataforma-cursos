<div>
    <article class="bg-gray-100 mb-3 px-4 py-3 shadow">
        @if($section->id)

            <form wire:submit.prevent="update" class="w-full" action="">
                <div class="flex items-center justify-between">
                    <input wire:model="section.name" class="input-form mr-8" type="text" placeholder="Ingrese el nombre de la sección">
                    <p wire:click="update" class="btn">
                        <i class="far fa-save"></i>
                    </p>
                </div>
                @error('section.name')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </form>

        @else
            <div class="flex items-center justify-between">
                <h4 class="cursor-pointer"><strong>Sección: </strong>{{ $item->name }}</h4>
                <div class="flex items-center">
                    <p wire:click="edit({{ $item }})" class="btn mr-2">
                        <i class="far fa-edit"></i>
                    </p>
                    <p wire:click="delete({{ $item }})" class="btn">
                        <i class="far fa-trash-alt"></i>
                    </p>
                </div>
            </div>

            <div class="mt-4">
                @foreach($item->lessons as $lesson)
                    <livewire:admin.course-lesson :lesson="$lesson" :key="$lesson->id">
                @endforeach
            </div>

            <div x-data="{open: false}">
                <p x-show="!open"  x-on:click=" open = true " class="flex items-center cursor-pointer">
                    <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
                    Agregar nueva sección
                </p>

                <div x-show="open" class="bg-white mb-3 px-4 py-3 shadow w-full mt-3">
                    <h4 class="text-lg mb-3">Agregar nueva lección</h4>
                    <form  class="" action="">
                        <div class="">

                            <div class="flex items-center">
                                <label class="w-40" for="" class="label-input">Nombre:</label>
                                <input wire:model="name" class="input-form input-lesson rounded-md" type="text" placeholder="Ingrese el nombre de la lección">
                            </div>
                            @error('name')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror

                            <div class="mt-2 flex items-center">
                                <label class="w-40" for="" class="label-input">Tiempo:</label>
                                <input wire:model="time" class="input-form input-lesson rounded-md" type="text" placeholder="Ingrese el tiempo de la lección">
                            </div>
                            @error('time')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror

                            <div class="mt-2 flex items-center">
                                <label class="w-40" for="" class="label-input">Plataforma:</label>
                                <select wire:model="platform_id" class="input-form input-lesson rounded-md" name="" id="">
                                    @foreach($platforms as $platform)
                                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('platform_id')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror

                            <div class="mt-2 flex items-center">
                                <label class="w-40" for="" class="label-input">Key:</label>
                                <input wire:model="key" class="input-form input-lesson rounded-md" type="text" placeholder="Ingrese el key de la lección">
                            </div>
                            @error('key')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                    <div class="flex items-center justify-end mt-3">
                        <button x-on:click=" open = false " class="btn btn-secondary mr-2">Cancelar</button>
                        <button wire:click="store" class="btn btn-primary">Agregar</button>
                    </div>
                </div>

            </div>
        @endif
    </article>
</div>
