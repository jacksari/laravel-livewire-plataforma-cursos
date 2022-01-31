
<div class="w-full ">
    {!! Form::label('name', 'Nombre: ', ['class' => 'font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase']) !!}
    <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
        {!! Form::text('name', null, ['class' => 'p-1 px-2 appearance-none border-0 focus:border-0 focus:ring-0 focus:border-transparent outline-none w-full text-gray-800'. ($errors->has('name') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un nombre']) !!}
    </div>
    @error('name')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>


<div class="w-full my-4">
    <label class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Permisos</label>
    <div class="grid grid-cols-6">
        @foreach($permissions as $permission)
            <label for="">
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                {!! $permission->name !!}
            </label>
        @endforeach
    </div>
    @error('permissions')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
