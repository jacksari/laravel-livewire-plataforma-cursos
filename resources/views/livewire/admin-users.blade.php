{{-- TODO agregar propiedad status a la tabla de usuarios --}}
<div>
    <section class="bg-gray-100 text-gray-600 px-2 sm:px-4 py-4 sm:py-8">
        <div class="container">
            {{--w-full max-w-2xl mx-auto--}}
            <div class="w-full max-w-7xl bg-white shadow-lg rounded-sm border border-gray-200">
                <div class="p-3 sm:px-5 sm:py-4 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="font-semibold text-gray-800 hidden sm:block">Lista de usuario</h2>
                    <div class="flex items-center  items-center">
                        {{-- TODO crear page crear usuario admin --}}
                        <a class="flex items-center justify-center" href="{{ route('admin.users.index') }}">
                            <i class="far fa-plus-square text-primary-500 text-lg mr-4"></i>
                        </a>
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base text-center">Crear usuario</h3>
                    </div>
                </div>
                <div class="p-3 py-1 md:px-5 md:py-2 border-b border-gray-100 flex items-center justify-between">
                    <input wire:keydown="limpiarPage" wire:model="search" class=" outline-none rounded-md border-gray-500 focus:ring-0 focus:border-gray-500" placeholder="Buscar usuario" type="text">
                </div>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">#</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Nombre</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Correo</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Imagen</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Docente</div>
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
                            @forelse($users as $user)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $user->id }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $user->name }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ $user->email }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap text-center">
                                        <img class="text-center h-8 w-8 rounded-full" src="{{ $user->profile_photo_path }}" alt="{{ $user->name }}">

                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        @if($user->teacher)
                                            <div class="text-left">
                                                <i class="fas fa-chalkboard-teacher text-green-500"></i>
                                            </div>
                                        @else
                                            <div class="text-left">
                                                <i class="fas fa-chalkboard-teacher text-red-500"></i>
                                            </div>
                                        @endif

                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">{{ date('d/m/Y', strtotime($user->updated_at)) }}</div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap flex items-center justify-around">
                                        <form action="{{ route('admin.teachers.add', $user) }}" method="POST">
                                            @csrf
                                            <button class="btn" type="submit">
                                                <i class="fas fa-chalkboard-teacher"></i>
                                            </button>

                                        </form>
                                        <a class="btn" href="{{ route('admin.users.edit', $user) }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn" type="submit">
                                                <i class="far fa-trash-alt"></i>
                                            </button>

                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="p-2 whitespace-nowrap">
                                        <div class="flex items-center justify-center">

                                            <p class="font-medium text-gray-800 text-lg">Sin datos</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
