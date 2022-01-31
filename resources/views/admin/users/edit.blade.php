<x-admin-layout>

    <x-slot name="header">
        {{ 'Usuarios' }}
    </x-slot>

    <section class="bg-gray-100 text-gray-600 px-2 sm:px-4 py-4 sm:py-8">
        <div class="container">
            {{--w-full max-w-2xl mx-auto--}}
            <div class="w-full max-w-7xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">

                <div class="p-3 sm:px-5 sm:py-4 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="font-semibold text-gray-800 hidden sm:block">Editar usuario</h2>
                    <div class="flex items-center  items-center">
                        {{-- TODO crear page crear usuario admin --}}
                        <a class="flex items-center justify-center" href="{{ route('admin.users.index') }}">
                            <i class="fas fa-list text-primary-500 text-lg mr-4"></i>
                        </a>
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base text-center">Listar usuarios</h3>
                    </div>
                </div>

                <div class="p-3">
                    {{-- TODO ordenar css de inputs e input error --}}
                    <div class="overflow-x-auto">


                        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}

                        <div class="w-full ">
                            {!! Form::label('name', 'Nombre: ', ['class' => 'font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase']) !!}
                            <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
                                {!! Form::text('name', null, ['class' => 'p-1 px-2 appearance-none border-0 focus:border-0 focus:ring-0 focus:border-transparent outline-none w-full text-gray-800'. ($errors->has('name') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un nombre']) !!}
                            </div>
                            @error('name')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full ">
                            {!! Form::label('email', 'Email: ', ['class' => 'font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase']) !!}
                            <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
                                {!! Form::text('email', null, ['class' => 'p-1 px-2 appearance-none border-0 focus:border-0 focus:ring-0 focus:border-transparent outline-none w-full text-gray-800'. ($errors->has('email') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba su email']) !!}
                            </div>
                            @error('email')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full ">
                            {!! Form::label('slug', 'Slug: ', ['class' => 'font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase']) !!}
                            <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
                                {!! Form::text('slug', null, ['class' => 'p-1 px-2 appearance-none border-0 focus:border-0 focus:ring-0 focus:border-transparent outline-none w-full text-gray-800'. ($errors->has('slug') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba su slug']) !!}
                            </div>
                            @error('slug')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="w-full my-4">
                            <label class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase">Roles</label>
                            <div class="grid grid-cols-6 px-2">
                                @foreach($roles as $rol)
                                    <label for="">
                                        {!! Form::checkbox('roles[]', $rol->id, null, ['class' => 'mr-1']) !!}
                                        {!! $rol->name !!}
                                    </label>
                                @endforeach
                            </div>
                            @error('roles')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                            @enderror
                        </div>


                        {!! Form::submit('Actualizar rol', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin-layout>
