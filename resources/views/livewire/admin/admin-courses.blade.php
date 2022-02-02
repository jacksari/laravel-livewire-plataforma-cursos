<div>
    <section class="bg-gray-100 text-gray-600 px-2 sm:px-4 py-4 sm:py-8 flex justify-center">
        <div class="w-full max-w-7xl bg-white shadow-lg rounded-sm border border-gray-200">

            <div class="p-3 sm:px-5 sm:py-4 border-b border-gray-100 flex items-center justify-between">
                <h2 class="font-semibold text-gray-800 hidden sm:block">Lista de cursos</h2>
                <div class="flex items-center  items-center">
                    {{-- TODO crear page crear usuario admin --}}
                    <a class="flex items-center justify-center" href="{{ route('admin.courses.create') }}">
                        <i class="far fa-plus-square text-primary-500 text-lg mr-4"></i>
                    </a>
                    <h3 class="font-semibold text-gray-800 text-sm sm:text-base text-center">Crear curso</h3>
                </div>
            </div>

            <div class="p-3 py-1 md:px-5 md:py-2 border-b border-gray-100 flex items-center justify-between">
                <input wire:keydown="limpiarPage" wire:model="search" class=" outline-none rounded-md border-gray-500 focus:ring-0 focus:border-gray-500" placeholder="Buscar curso" type="text">
            </div>

            @if($courses->count())
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">#</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Imagen</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Título</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Profesor</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Matriculados</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Calificación</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Precio</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Estado</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Fecha</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Configuración</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                            @foreach($courses as $key => $course)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $key + 1 }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        @if($course->image)
                                            <img class="text-center h-8 w-8 object-cover" src="{{ asset(str_replace("public", "storage", $course->image->url)) }}"/>
                                        @endif


                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div>
                                            <p class="text-left font-semibold">{{ $course->title }}</p>
                                            <div class="flex items-center mt-1">
                                                <p class="text-xs text-left bg-blue-200 px-2 font-semibold inline-flex rounded-full text-center text-blue-800 mr-2">{{ $course->category->name }}</p>
                                                <p class="text-xs text-left bg-blue-200 px-2 font-semibold inline-flex rounded-full text-center text-blue-800">{{ $course->level->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $course->teacher->user->name}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap text-center">
                                        <div class="flex items-center">
                                            <div class="text-left mr-2">{{ $course->students->count()}}</div>
                                            <p>Matriculados</p>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap text-center flex items-center">
                                        <div class="text-left mr-2">{{ $course->rating}}</div>
                                        <div class="flex items-center">
                                            <i class="fas fa-star {{$course->rating >= 1 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                                            <i class="fas fa-star {{$course->rating >= 2 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                                            <i class="fas fa-star {{$course->rating >= 3 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                                            <i class="fas fa-star {{$course->rating >= 4 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                                            <i class="fas fa-star {{$course->rating == 5 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap text-center">
                                        <div class="text-left">USD {{ $course->price->value}}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        @if($course->status == 1)
                                            <p class="text-sm text-left bg-red-200 px-2 font-semibold inline-flex rounded-full text-center text-red-800">
                                                Borrador
                                            </p>
                                        @endif
                                        @if($course->status == 2)
                                            <p class="text-sm text-left bg-yellow-200 px-2 font-semibold inline-flex rounded-full text-center text-yellow-800">
                                                Revisión
                                            </p>
                                        @endif
                                        @if($course->status == 3)
                                            <p class="text-sm text-left bg-green-200 px-2 font-semibold inline-flex rounded-full text-center text-green-800">
                                                Publicado
                                            </p>
                                        @endif

                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ date('d/m/Y', strtotime($course->updated_at)) }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap flex items-center justify-around">
                                        <a class="btn" href="{{ route('admin.courses.edit', $course) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.courses.destroy', $course) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn" type="submit">
                                                <i class="far fa-trash-alt"></i>
                                            </button>

                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $courses->links() }}
                        </div>
                    </div>
                </div>
            @else
                <div class="flex items-center justify-center px-6 py-4">

                    <p class="font-medium text-gray-800 text-lg">No hay registros con ese nombre</p>
                </div>

            @endif


        </div>
    </section>
</div>
