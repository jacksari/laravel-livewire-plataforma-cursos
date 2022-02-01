
<div class="w-full py-1">
    {!! Form::label('name', 'Nombre: ', ['class' => 'label-input']) !!}
    <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
        {!! Form::text('name', null, ['class' => 'input-form'. ($errors->has('name') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un nombre']) !!}
    </div>
    @error('name')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>


<div class="w-full my-4">
    <label class="label-input">Permisos</label>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 px-2">
        @foreach($permissions as $permission)
            <label for="" class="flex items-center my-1">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-2']) !!}
                <span class="text-sm md:text-base">{!! $permission->name !!}</span>
            </label>
        @endforeach
    </div>
    @error('permissions')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
