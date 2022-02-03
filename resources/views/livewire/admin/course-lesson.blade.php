<div>
    <div class="bg-white mb-3 px-4 py-4 shadow">
        @if($lesson->id)

            <form wire:submit.prevent="update" class="w-full" action="">
                <div class="">
                    <div class="flex items-center">
                        <label class="w-40" for="" class="label-input">Nombre:</label>
                        <input wire:model="lesson.name" class="input-form input-lesson rounded-md" type="text" placeholder="Ingrese el nombre de la lección">
                    </div>
                    @error('lesson.name')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <div class="mt-2 flex items-center">
                        <label class="w-40" for="" class="label-input">Tiempo:</label>
                        <input wire:model="lesson.time" class="input-form input-lesson rounded-md" type="text" placeholder="Ingrese el tiempo de la lección">
                    </div>
                    @error('lesson.time')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <div class="mt-2 flex items-center">
                        <label class="w-40" for="" class="label-input">Plataforma:</label>
                        <select class="input-form input-lesson rounded-md" wire:model="lesson.platform_id" name="" id="">
                            @foreach($platforms as $platform)
                                <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-2 flex items-center">
                        <label class="w-40" for="" class="label-input">Key:</label>
                        <input wire:model="lesson.key" class="input-form input-lesson rounded-md" type="text" placeholder="Ingrese el key de la lección">
                    </div>
                    @error('lesson.key')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                    <div class="flex items-center justify-end mt-4">
                        <p wire:click="update" class="btn btn-primary mr-4">
                            <i class="far fa-save"></i>
                            Actualizar
                        </p>
                        <p wire:click="cancel" class="btn btn-secondary">
                            <i  class="far fa-save"></i>
                            Cancelar
                        </p>
                    </div>
                </div>

            </form>

        @else
            <div class="">
                <h4 class="cursor-pointer">
                    <i class="far fa-play-circle text-primary-500 mr-2"></i>
                    <strong>Lección: </strong>
                    {{ $item->name }}
                </h4>
                <hr class="my-2">
                <div class="flex items-center justify-between">
                    <div>
                        <p><strong>Plataforma:</strong> {{ $item->platform->name }}</p>
                        <p><strong>Tiempo:</strong> {{ $item->time }} min.</p>
                        <p><strong>Key:</strong> {{ $item->key }}</p>
                    </div>
                    <div class="flex items-center">
                        <p wire:click="edit({{ $item }})" class="btn mr-2">
                            <i class="far fa-edit"></i>
                        </p>
                        <p wire:click="delete({{ $item }})" class="btn">
                            <i class="far fa-trash-alt"></i>
                        </p>
                    </div>

                </div>

                <div>
                    <livewire:admin.lesson-description :lesson="$item" :key="$item->id">
                </div>


            </div>

        @endif
    </div>
</div>
