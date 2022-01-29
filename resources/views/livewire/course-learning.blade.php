<div>
    <div class="flex flex-col justify-between min-h-screen">
        <nav x-data="{ open: false }" class="bg-background border-b border-gray-100 shadow">
            <!-- Primary Navigation Menu -->
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center justify-between w-full">
                        <!-- Logo -->
                        <div class="flex items-center">
                            <div class="flex-shrink-0 flex items-center">
                                <a href="{{ route('home') }}">
                                    <img class="h-8 w-8" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png" alt="">
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex ml-4 md:ml-2">
                                <a class="text-white text-xs md:text-sm" href="{{ route('courses.show', $course) }}">{{ \Illuminate\Support\Str::length($course->title > 40) ? substr($course->title, 0, 40)."..." : $course->title }}</a>

                            </div>
                        </div>
                        <div class=" sm:-my-px  sm:flex flex items-center">
                            <div
                                x-data="scrollProgress"
                                class="flex items-center justify-center relative"
                            >
                                <!-- Building a Progress Ring: https://css-tricks.com/building-progress-ring-quickly/ -->
                                <svg class="w-10 h-10 mr-2">
                                    <circle
                                        class="text-gray-300"
                                        stroke-width="3"
                                        stroke="currentColor"
                                        fill="transparent"
                                        r="15"
                                        cx="20"
                                        cy="20"
                                    />
                                    <circle
                                        class="text-primary-500"
                                        stroke-width="3"
                                        :stroke-dasharray="100"
                                        :stroke-dashoffset="40"
                                        stroke-linecap="round"
                                        stroke="currentColor"
                                        fill="transparent"
                                        r="15"
                                        cx="20"
                                        cy="20"
                                    />
                                </svg>
                                <span class="absolute progress text-base text-white z-50">
                                    <i class="fab fa-angellist"></i>
                                </span>
                            </div>
                            <p class="text-white">20% Tu progreso</p>
                        </div>
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <!-- Settings Dropdown -->
                        <div class="ml-3 relative">
                            @auth
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                            <span class="inline-flex rounded-md">
                                    <button type="button" class="w-40 flex justify-center items-center inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Administrar cuenta') }}
                                        </div>

                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Perfil') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('courses.index') }}">
                                            {{ __('Mis cursos') }}
                                        </x-jet-dropdown-link>


                                        <div class="border-t border-gray-100"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Cerrar sesión') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-jet-dropdown>
                            @else
                                <a href="{{ route('login')  }}" class="btn-secondary">Iniciar sesión</a>
                                <a href="{{ route('register')  }}" class="btn-primary">Registro</a>
                            @endauth
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

                <!-- Responsive Settings Options -->
                @auth
                    <div class="pt-4 pb-1 border-t border-gray-500">
                        <div class="flex items-center px-4">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="flex-shrink-0 mr-3">
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </div>
                            @endif

                            <div>
                                <div class="font-medium text-base text-gray-300">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-300">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Account Management -->

                            <a href="{{ route('profile.show') }}" class="block pl-3 pr-4 py-2 border-l-4 hover:border-primary-500 border-transparent text-base font-medium text-white hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition" >
                                {{ __('Mi Perfil') }}
                            </a>
                            <a href="{{ route('courses.index') }}" class="block pl-3 pr-4 py-2 border-l-4 hover:border-primary-500 border-transparent text-base font-medium text-white hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition" >
                                {{ __('Mis cursos') }}
                            </a>




                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}"
                                   class="block pl-3 pr-4 py-2 border-l-4 hover:border-primary-500 border-transparent text-base font-medium text-white hover:text-gray-800 hover:bg-gray-50 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition"
                                   onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                >
                                    {{ __('Cerrar sesión') }}
                                </a>
                            </form>

                            <!-- Team Management -->
                            @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <div class="border-t border-gray-200"></div>

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                                    {{ __('Team Settings') }}
                                </x-jet-responsive-nav-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                    <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                        {{ __('Create New Team') }}
                                    </x-jet-responsive-nav-link>
                                @endcan

                                <div class="border-t border-gray-200"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                    <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                                @endforeach
                            @endif
                        </div>
                    </div>
                @else
                    <div class="py-1 border-t border-gray-200">
                        <x-jet-responsive-nav-link href="{{ route('login')  }}" :active="request()->routeIs('login')">
                            Iniciar sesión
                        </x-jet-responsive-nav-link>
                        <x-jet-responsive-nav-link href="{{ route('register')  }}" :active="request()->routeIs('register')">
                            Registro
                        </x-jet-responsive-nav-link>
                    </div>
                @endauth

            </div>
        </nav>

        <section class="flex-1  min-h-full">
            <div class="grid grid-cols-4 h-full flex-1">
                <div class="col-span-3 flex flex-col justify-between">
                    <div class="player-video-container">

                        <div class="responsive-container">

                            <x-video-lesson :key="$current->key"/>

                            @if($this->previous)
                                <div wire:click="changeLesson({{ $this->previous }})" class="absolute previous-btn-video bg-transparent border-2 border-l-0 cursor-pointer border-gray-500">
                                    <i class="fas fa-chevron-left text-2xl text-white p-4"></i>
                                </div>
                            @endif

                            @if($this->next)
                                <div wire:click="changeLesson({{ $this->next }})" class="absolute next-btn-video bg-transparent border-2 border-r-0 cursor-pointer border-gray-500">
                                    <i class="fas fa-chevron-right text-2xl text-white p-4"></i>
                                </div>
                            @endif


                        </div>

                    </div>
                    <div class="flex justify-center items-center flex-1">
                        <!--actual component start-->
                        <div class="w-full h-full" x-data="setup()">
                            <ul class="flex justify-start items-center m-4">
                                <template x-for="(tab, index) in tabs" :key="index">
                                    <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-2"
                                        :class="activeTab===index ? 'text-primary-500 border-primary-500 font-bold' : ''" @click="activeTab = index"
                                        x-text="tab"></li>
                                </template>
                            </ul>

                            <div class="w-full bg-white p-8">
                                <div x-show="activeTab===0">
                                    <h4>Hola mundo</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium aliquam ea eius et facere fugiat impedit in laborum provident quidem quis sapiente, sunt tempora tempore velit veniam vero, voluptas.</p>
                                </div>
                                <div x-show="activeTab===1">Content 2</div>
                                <div x-show="activeTab===2">Content 3</div>
                                <div x-show="activeTab===3">Content 4</div>
                            </div>
                        </div>
                        <!--actual component end-->
                    </div>
                    <x-footer-learning/>
                </div>
                <div class="col-span-1 shadow">
                    <div class=" sticky top-0">
                        <div class="min-screen-learning flex flex-col justify-between">
                            <div class="bg-gray-100 flex items-center justify-between p-4 border-b-2 border-gray-200">
                                <h2 class="font-bold">Contenido del curso</h2>
                                <i class="fas fa-times text-gray-700 text-lg cursor-pointer"></i>
                            </div>
                            <div class="flex-1	 overflow-y-auto">
                                @foreach($course->sections as $key => $section)
                                    <div class="bg-gray-100 cursor-pointer  overflow-hidden border-t-2 border-b-2 border-gray-200">
                                        <div class="" x-data="{ open: false }">
                                            <div @click="open = !open" class="px-3 py-4 flex justify-between items-center ">
                                                <h3 class="text-base font-medium">{{ $key + 1 }}. {{ $section->name}}</h3>
                                                <i :class="open ? 'text-lg fas fa-chevron-down text-gray-500 transform rotate-180 transition duration-500 ease-in-out' : 'text-lg fas fa-chevron-down text-gray-500 transition duration-500 ease-in-out'" class=""></i>
                                            </div>
                                            <div  x-transition:enter="transition ease-out duration-300"
                                                  x-transition:enter-start="opacity-0 scale-90"
                                                  x-transition:enter-end="opacity-100 scale-100"
                                                  x-transition:leave="transition ease-in duration-300"
                                                  x-transition:leave-start="opacity-100 scale-100"
                                                  x-transition:leave-end="opacity-0 scale-90"
                                                  x-show="open"
                                                  class="border-t-2 bg-white">
                                                @foreach($section->lessons as $key => $lesson)
                                                    <div class="{{ $lesson->id == $current->id ? 'flex items-center px-2 py-2 bg-gray-300' : 'px-2 py-2 flex items-center' }}">
                                                        @if($lesson->complete)
                                                            <i class="fas fa-check-square mr-3 text-gray-500 text-lg"></i>
                                                        @else
                                                            <i class="far fa-square mr-3 text-gray-500 text-lg"></i>
                                                        @endif



                                                        <div>

                                                            <p wire:click="changeLesson({{ $lesson }})" class="text-sm text-gray-900">{{ $key + 1 }}. {{ strlen($lesson->name) > 60 ? substr($lesson->name, 0, 60)."..." : $lesson->name }}</p>

                                                            <div class="flex items-center mt-1">
                                                                <i class="fas fa-play-circle text-gray-500 mr-2"></i>
                                                                <p class="text-xs text-gray-500">{{ $lesson->time }} min</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>


    </div>

    <script>



        function setup() {
            return {
                activeTab: 0,
                tabs: [
                    "Descripción General",
                    "Preguntas y respuestas",
                    "Notas",
                    "Anuncios",
                ]
            };
        };

        const scrollProgress = () => {
            return {
                init() {
                    window.addEventListener('scroll', () => {
                        let winScroll = document.body.scrollTop || document.documentElement.scrollTop
                        let height = document.documentElement.scrollHeight - document.documentElement.clientHeight
                        this.percent = Math.round((winScroll / height) * 100)
                    })
                },
                circumference: 30 * 2 * Math.PI,
                percent: 0,
            }
        }
    </script>
</div>
