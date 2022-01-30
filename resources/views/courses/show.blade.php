<x-app-layout>

    <section class="bg-background">
        <div class="container p-8 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                <div class="h-80 bg-red-200 rounded-md">
                    <div id="player" data-plyr-provider="youtube" data-plyr-embed-id="{{ $course->video }}"></div>
                </div>
                {{--
                <img class="w-full h-full" src="{{asset(str_replace("public", "", $course->image->url))}}" alt="">
                --}}
                <div>
                    <h1 class="text-white text-4xl">{{ $course->title }}</h1>
                    <h3 class="text-white text-xl mt-4">{{ $course->subtitle }}</h3>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-calendar-alt text-white"></i>
                        <p class="text-white ml-2">Última actualización: {{ date('d/m/Y', strtotime($course->level->updated_at)) }}</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-align-left text-white"></i>
                        <p class="text-white ml-2">Categoría: {{ $course->category->name }}</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <i class="fab fa-atlassian text-white"></i>
                        <p class="text-white ml-2">Nivel: {{ $course->level->name }}</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-users text-white"></i>
                        <p class="text-white ml-2">Matriculados: {{ $course->students_count }}</p>
                    </div>
                    <div class="flex items-center mt-2">
                        <i class="fas fa-star text-white"></i>
                        <p class="text-white ml-2">Calificaión: {{ $course->rating }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">
        <div class="container">
            <div class="grid grid-cols-3 gap-8">
                <div class="order-2 md:order-1 col-span-3 md:col-span-2">
                    <div class="bg-white shadow p-4">
                        <h2 class="text-2xl font-bold">Lo que aprenderas</h2>
                        <ul class="grid grid-cols-1 md:grid-cols-2 mt-2">
                            @foreach( $course->goals as $goal )
                                <li class="list-disc ml-4 my-1">{{ $goal->name }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="bg-white shadow p-4 mt-8">
                        <h2 class="text-2xl font-bold">Temario</h2>
                        <div class="grid grid-cols-1 mt-2">
                            @foreach( $course->sections as $key => $section )
                                <article class="bg-gray-100 shadow  cursor-pointer  my-1 rounded-md overflow-hidden">
                                    <div x-data="{ open: false }">
                                        <div @click="open = !open" class="px-3 py-3 flex justify-between items-center">
                                            <div class="flex items-center">
                                                <i :class="open ? 'mr-2 text-md fas fa-plus text-primary-500 transform rotate-45 transition duration-500 ease-in-out' : 'mr-2 text-md fas fa-plus text-primary-500 transition duration-500 ease-in-out'" class=""></i>

                                                <h3 class="text-base font-semibold">{{ $key + 1 }}. {{ $section->name}}</h3>
                                            </div>
                                            @php
                                                $times = 0;
                                                $lessons = $section->lessons;
                                                foreach ($lessons as $lec){
                                                    $times = $times + $lec->time;
                                                }

                                            @endphp

                                            <div class="flex items-center">
                                                <p class="text-sm text-gray-500">{{ $section->lessons->count() }} clases </p>
                                                <p class="text-xs text-gray-500 mx-1">•</p>
                                                <p class="text-sm text-gray-500">{{ $times }} minutos</p>

                                            </div>
                                        </div>
                                        <div  x-transition:enter="transition ease-out duration-300"
                                              x-transition:enter-start="opacity-0 scale-90"
                                              x-transition:enter-end="opacity-100 scale-100"
                                              x-transition:leave="transition ease-in duration-300"
                                              x-transition:leave-start="opacity-100 scale-100"
                                              x-transition:leave-end="opacity-0 scale-90"
                                              x-show="open"
                                              @click="open = !open"
                                              class="pt-2 pb-2 px-4 border-t-2 bg-white">
                                            @foreach($section->lessons as $lesson)

                                                <div class="flex items-center justify-between py-1">
                                                    <div class="flex items-center">
                                                        <i class="far fa-play-circle text-primary-500 mr-2"></i>
                                                        <p class="text-sm text-gray-500">{{ $lesson->name }}</p>
                                                    </div>
                                                    <p class="text-sm text-gray-500">{{ $lesson->time }} min</p>
                                                </div>

                                            @endforeach
                                        </div>
                                    </div>

                                </article>
                            @endforeach
                        </div>
                    </div>

                    <div class="bg-white shadow p-4 mt-8">
                        <h2 class="text-2xl font-bold">Requisitos</h2>
                        <ul class="grid grid-cols-1 md:grid-cols-2 mt-2">
                            @foreach( $course->requirements as $requirement )
                                <li class="list-disc ml-4 my-1">{{ $requirement->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="order-1 md:order-2 col-span-3 md:col-span-1">
                    <div class="bg-white shadow p-4 ">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full object-cover" src="{{ $course->teacher->image }}" alt="{{ $course->teacher->user->name }}">
                            <div class="ml-4">
                                <h5 class="text-lg">{{ $course->teacher->user->name }}</h5>
                                <a href="{{ route('teachers.show', $course->teacher) }}" class="text-sm text-primary-500">{{ '@'.\Illuminate\Support\Str::slug($course->teacher->user->name, '') }}</a>
                            </div>
                        </div>
                        <div class="w-full mt-4 flex">
                            @can('enrolled', $course)
                                <a href="{{ route('courses.learning', $course) }}" class="btn btn-primary w-full">Continuar con el curso</a>
                            @else
                                <form class="w-full" action="{{ route('courses.enrolled', $course) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary w-full">Inscribirme ahora</button>
                                </form>
                            @endcan

                        </div>
                    </div>
                    <div class="bg-white shadow p-4 mt-8 hidden md:block">
                        <h4 class="text-2xl font-bold">Cursos similares</h4>
                        @foreach($similares as $course)
                            <a href="{{ route('courses.show', $course) }}">
                                <article class="grid grid-cols-2 gap-4 my-3">
                                    <img class="w-full h-28 rounded" src="{{asset(str_replace("public", "", $course->image->url))}}" alt="">
                                    <div class="">
                                        <h3>{{ strlen($course->title) > 30 ? substr($course->title, 0, 30)."..." : $course->title }}</h3>
                                        <div class="flex items-center">
                                            <img class="h-6 w-6 rounded-full mr-2" src="{{ $course->teacher->profile_photo_path }}" alt="{{ $course->teacher->name }}">
                                            <h5 class="text-sm text-gray-700">{{ strlen($course->teacher->name) > 14 ? substr($course->teacher->name, 0, 14)."..." : $course->teacher->name }}</h5>
                                        </div>
                                        <div class="flex items-center my-1">
                                            <i class="text-sm fas fa-star text-yellow-300 mr-2"></i>
                                            <p class="text-sm">{{ $course->rating }}</p>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>

        document.addEventListener('livewire:load', function () {
            console.log('Cargando...')

        })

        const player = new Plyr('#player');
        console.log('PLAYER', player)
    </script>


</x-app-layout>
