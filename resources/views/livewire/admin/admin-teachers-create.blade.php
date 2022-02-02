<div>
    <section class="bg-gray-100 text-gray-600 px-2 sm:px-4 py-4 sm:py-8">
        <div class="container ">
            {{--w-full max-w-2xl mx-auto--}}


            <div class="w-full max-w-7xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200 ">

                <div class=" p-3 sm:px-5 sm:py-4 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="font-semibold text-gray-800 hidden sm:block">Crear profesor</h2>
                    <div class="flex items-center  items-center">
                        {{-- TODO crear page crear usuario admin --}}
                        <a class="flex items-center justify-center" href="{{ route('admin.teachers.index') }}">
                            <i class="fas fa-list text-primary-500 text-lg mr-4"></i>
                        </a>
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base text-center">Listar profesores</h3>
                    </div>
                </div>



                <div class="p-3 ">
                    <div class="overflow-x-auto ">

                        {!! Form::open(['route' => ['admin.teachers.store'], 'files' => true]) !!}

                        @include('admin.teachers.partials.form')

                        {!! Form::submit('Crear profesor', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
