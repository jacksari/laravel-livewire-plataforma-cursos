<x-admin-layout>

    <x-slot name="header">{{ 'Roles' }}</x-slot>

    @if(session('info'))
        <div class="flex flex-col space-y-4 items-center justify-center bg-gray-100 py-4">
            <div class="alert flex flex-row items-center bg-green-200 p-3 rounded border-b-2 border-green-300">
                <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
				<span class="text-green-500">
					<svg fill="currentColor"
                         viewBox="0 0 20 20"
                         class="h-6 w-6">
						<path fill-rule="evenodd"
                              d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                              clip-rule="evenodd"></path>
					</svg>
				</span>
                </div>
                <div class="alert-content ml-4">
                    <div class="alert-title font-semibold text-lg text-green-800">
                        Success
                    </div>
                    <div class="alert-description text-sm text-green-600">
                        {{ session('info') }}
                    </div>
                </div>
            </div>
        </div>
    @endif



    <section class="bg-gray-100 text-gray-600 px-2 sm:px-4 py-4 sm:py-8">
        <div class="container">
            {{--w-full max-w-2xl mx-auto--}}
            <div class="w-full max-w-xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">

                <div class="p-3 sm:px-5 sm:py-4 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="font-semibold text-gray-800 hidden sm:block">Lista de roles</h2>
                    <div class="flex items-center  items-center">
                        {{-- TODO crear page crear usuario admin --}}
                        <a class="flex items-center justify-center" href="{{ route('admin.roles.create') }}">
                            <i class="far fa-plus-square text-primary-500 text-lg mr-4"></i>
                        </a>
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base text-center">Crear rol</h3>
                    </div>
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
                                        <div class="font-semibold text-left">Configuración</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @forelse($roles as $rol)
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{ $rol->id }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{ $rol->name }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap flex items-center justify-around">
                                            <a class="btn" href="{{ route('admin.roles.edit', $rol) }}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.roles.destroy', $rol) }}" method="POST">
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
                                        <td colspan="3" class="p-2 whitespace-nowrap">
                                            <div class="flex items-center justify-center">

                                                <p class="font-medium text-gray-800 text-lg">Sin datos</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin-layout>
