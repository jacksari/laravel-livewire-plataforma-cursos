<x-admin-layout>

    <x-slot name="header">
        {{ 'Cursos' }}
    </x-slot>

    <section class="bg-gray-100 text-gray-600 px-2 sm:px-4 py-4 sm:py-8">
        <div class="container grid grid-cols-4 gap-4">
            {{--w-full max-w-2xl mx-auto--}}
            @include('admin.courses.partials.aside')

            <div class="col-span-3 w-full max-w-7xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">

                <div class="p-3 sm:px-5 sm:py-4 border-b border-gray-100 flex items-center justify-between">
                    <h2 class="font-semibold text-gray-800 hidden sm:block">Crear secciones</h2>
                    <div class="flex items-center  items-center">
                        {{-- TODO crear page crear usuario admin --}}
                        <a class="flex items-center justify-center" href="{{ route('admin.courses.index') }}">
                            <i class="fas fa-list text-primary-500 text-lg mr-4"></i>
                        </a>
                        <h3 class="font-semibold text-gray-800 text-sm sm:text-base text-center">Listar cursos</h3>
                    </div>
                </div>

                <div class="p-3">
                    <div class="overflow-x-auto">

                        <div class="w-full ">

                            <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
                                <p class="p-1 px-2 appearance-none border-0 focus:border-0 focus:ring-0 focus:border-transparent outline-none w-full text-gray-800">
                                    Curso: {{ $course->title }}
                                </p>
                            </div>
                        </div>

                        <livewire:admin.course-section :course="$course">

                    </div>
                </div>
            </div>
        </div>
    </section>


</x-admin-layout>
