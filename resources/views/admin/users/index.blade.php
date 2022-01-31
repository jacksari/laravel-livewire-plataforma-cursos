<x-admin-layout>

    <x-slot name="header">{{ 'Usuarios' }}</x-slot>

    <section class="bg-gray-100 text-gray-600 px-4 py-8">
        <div class="container">
            {{--w-full max-w-2xl mx-auto--}}
            <div class="w-full max-w-7xl bg-white shadow-lg rounded-sm border border-gray-200">
                <div class="px-5 py-4 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="font-semibold text-gray-800">Crear usuario</h2>
                    <div class="flex items-center">
                        <a class="flex items-center justify-center" href="{{ route('admin.roles.index') }}">
                            <i class="fas fa-list text-primary-500 text-lg mr-4"></i>
                        </a>
                        <h3 class="font-semibold text-gray-800">Crear usuario</h3>
                    </div>
                </div>
                <div class="p-3">
                    <div class="overflow-x-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-admin-layout>
