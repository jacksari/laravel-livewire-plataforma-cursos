<x-app-layout>

    <section class="bg-background py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-white text-4xl py-2">Mi aprendizaje</h1>
            <p class="text-white text-xl py-1">Todos tus cursos</p>
        </div>
    </section>

    <section class="py-8 md:py-16">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach($courses as $course)
                    <div class="shadow flex flex-col">
                        <div class="relative h-40 w-full">
                            <a href="{{ route('courses.learning', $course) }}" class="">
                                <img class="h-full w-full object-cover" src="{{asset(str_replace("public", "", $course->image->url))}}" alt="">
                                <p class="absolute top-2 left-2 text-xs bg-primary-500 rounded text-white px-2 py-1">{{ $course->category->name }}</p>
                            </a>
                        </div>
                        <div class="p-2 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm">
                                    <a href="{{ route('courses.learning', $course) }}">
                                        {{ strlen($course->title) > 45 ? substr($course->title, 0, 45)."..." : $course->title }}
                                    </a>

                                </h3>
                                <p class="text-xs text-gray-500 font-light">{{ strlen($course->teacher->user->name) > 20 ? substr($course->teacher->user->name, 0, 20)."..." : $course->teacher->user->name }}, {{ strlen($course->teacher->title) > 20 ? substr($course->teacher->title, 0, 20)."..." : $course->teacher->title }} </p>
                                @php
                                    $complete = 0;
                                    $total = $course->lessons->count();
                                    $lessons = $course->lessons;
                                    foreach ($lessons as $lesson){
                                        if ($lesson->complete){
                                            $complete = $complete + 1;
                                        }

                                    }
                                @endphp
                            </div>

                            <div>
                                <div class='bg-gray-300 w-full my-2' style="height: 4px">
                                    <div style="width: {{ round($complete /  $total * 100, 1) }}%" class='bg-primary-500 h-full'></div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <p class="text-gray-700 text-xs">{{ round($complete /  $total * 100, 1) }} % completado</p>
                                    {{-- TODO agregar calificaciones --}}
                                    <div class="flex flex-col items-end">
                                        <div>
                                            <i class="fas fa-star text-gray-400 text-xs"></i>
                                            <i class="fas fa-star text-gray-400 text-xs"></i>
                                            <i class="fas fa-star text-gray-400 text-xs"></i>
                                            <i class="fas fa-star text-gray-400 text-xs"></i>
                                            <i class="fas fa-star text-gray-400 text-xs"></i>
                                        </div>
                                        {{-- TODO agregar btn para calificar el curso --}}
                                        {{-- TODO agregar boton de que ya se calificó el curso --}}
                                        <p class="text-xs text-gray-700 cursor-pointer">Tu calificaión</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
