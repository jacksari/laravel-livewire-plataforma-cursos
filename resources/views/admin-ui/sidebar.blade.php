@php
    $nav_links = [
        [
            'name' => 'Usuarios',
            'icon' => 'fas fa-users',
            'route' => route('admin.users.index'),
            'active'=> request()->routeIs('admin.users.*'),
            'links' => [
                [
                    'name' => 'Ver usuarios',
                    'route' => route('admin.users.index'),
                    'active'=> request()->routeIs('admin.users.index'),
                    'can' => 'Leer usuarios'
                ],
                [
                    'name' => 'Crear usuario',
                    'route' => route('admin.users.create'),
                    'active'=> request()->routeIs('admin.users.create'),
                    'can' => 'Crear usuarios'
                ],
            ],
        ],
        [
            'name' => 'Roles',
            'icon' => 'far fa-address-book',
            'route' => route('admin.roles.index'),
            'active'=> request()->routeIs('admin.roles.*'),
            'links' => [
                [
                    'name' => 'Ver roles',
                    'route' => route('admin.roles.index'),
                    'active'=> request()->routeIs('admin.roles.index'),
                    'can' => 'Leer rol'
                ],
                [
                    'name' => 'Crear roles',
                    'route' => route('admin.roles.create'),
                    'active'=> request()->routeIs('admin.roles.create'),
                    'can' => 'Crear rol'
                ],
            ],
        ],
        [
            'name' => 'Profesores',
            'icon' => 'fas fa-chalkboard-teacher',
            'route' => route('admin.teachers.index'),
            'active'=> request()->routeIs('admin.teachers.*'),
            'links' => [
                [
                    'name' => 'Ver profesores',
                    'route' => route('admin.teachers.index'),
                    'active'=> request()->routeIs('admin.teachers.index'),
                    'can' => 'Leer profesores'
                ],
                [
                    'name' => 'Crear profesor',
                    'route' => route('admin.teachers.create'),
                    'active'=> request()->routeIs('admin.teachers.create'),
                    'can' => 'Crear profesores'
                ],
            ],
        ],
    ];
@endphp

{{-- TODO los links deben sombrearse cuando esten activos --}}

<div
    x-show.in.out.opacity="isSidebarOpen"
    class="fixed inset-0 z-10 bg-black bg-opacity-20 lg:hidden"
    style="backdrop-filter: blur(14px); -webkit-backdrop-filter: blur(14px)"
></div>
<!-- Sidebar -->
<aside
    x-transition:enter="transition transform duration-300"
    x-transition:enter-start="-translate-x-full opacity-30  ease-in"
    x-transition:enter-end="translate-x-0 opacity-100 ease-out"
    x-transition:leave="transition transform duration-300"
    x-transition:leave-start="translate-x-0 opacity-100 ease-out"
    x-transition:leave-end="-translate-x-full opacity-0 ease-in"
    class="fixed inset-y-0 z-10 flex flex-col flex-shrink-0 w-64 max-h-screen overflow-hidden transition-all transform bg-white border-r shadow-lg lg:z-auto lg:static lg:shadow-none"
    :class="{'-translate-x-full lg:translate-x-0 lg:w-20': !isSidebarOpen}"
>
    <!-- sidebar header -->
    <div class="flex items-center justify-between flex-shrink-0 p-2" :class="{'lg:justify-center': !isSidebarOpen}">
        <a href="{{ route('home') }}">
            <span class="p-2 text-xl font-semibold leading-8 tracking-wider uppercase whitespace-nowrap">
            K<span :class="{'lg:hidden': !isSidebarOpen}">-WD</span>
          </span>
        </a>
        <button @click="toggleSidbarMenu()" class="p-2 rounded-md lg:hidden">
            <svg
                class="w-6 h-6 text-gray-600"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <!-- Sidebar links -->
    <nav class="flex-1 overflow-hidden hover:overflow-y-auto">
        <ul class=" p-2 overflow-hidden" :class="{'hidden': isSidebarOpen}">
            <li   x-data="{ isActive: false, open: false}">
                <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                <a
                    href="{{ route('admin.index') }}"
                    class="flex items-center justify-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                    :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}"
                    role="button"
                    aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                                    <span aria-hidden="true">
                                        <i class="fas fa-home"></i>
                                    </span>

                </a>
            </li>
        </ul>
        <div class="p-2" :class="{'hidden': !isSidebarOpen}">
            <div   x-data="{ isActive: false, open: false}">
                <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                <a
                    href="{{ route('home') }}"
                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                    :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}"
                    :class="{'justify-center': !isSidebarOpen}"
                    role="button"
                    aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                >
                          <span aria-hidden="true">
                            <i class="fas fa-home"></i>
                          </span>
                    <span  class="ml-2 text-sm"> Dashboard </span>
                    <span class="ml-auto" aria-hidden="true">

                  </span>
                </a>

            </div>
        </div>

        @foreach($nav_links as $link)
            <ul class=" p-2 overflow-hidden" :class="{'hidden': isSidebarOpen}">
                <li   x-data="{ isActive: false, open: false}">
                    <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                    <a
                        href="{{ $link['route'] }}"
                        class="flex items-center justify-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                        :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}"
                        role="button"
                        aria-haspopup="true"
                        :aria-expanded="(open || isActive) ? 'true' : 'false'"
                    >
                                    <span aria-hidden="true">
                                        <i class="{{ $link['icon'] }}"></i>
                                    </span>

                    </a>
                </li>
            </ul>
            <div class="p-2" :class="{'hidden': !isSidebarOpen}">
                <div   x-data="{ isActive: false, open: false}">
                    <!-- active & hover classes 'bg-blue-100 dark:bg-blue-600' -->
                    <a
                        href="#"
                        @click="$event.preventDefault(); open = !open"
                        class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-blue-100 dark:hover:bg-blue-600"
                        :class="{'bg-blue-100 dark:bg-blue-600': isActive || open}"
                        :class="{'justify-center': !isSidebarOpen}"
                        role="button"
                        aria-haspopup="true"
                        :aria-expanded="(open || isActive) ? 'true' : 'false'"
                    >
                          <span aria-hidden="true">
                            <i class="{{ $link['icon'] }}"></i>
                          </span>
                        <span  class="ml-2 text-sm"> {{ $link['name'] }} </span>
                        <span class="ml-auto" aria-hidden="true">
                         <!-- active class 'rotate-180' -->
                        <svg
                            class="w-4 h-4 transition-transform transform"
                            :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                  </span>
                    </a>
                    @if($link['links'])
                        @foreach($link['links'] as $nav_links)
                            @can($nav_links['can'])
                                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->

                                    <a
                                        href="{{ $nav_links['route'] }}"
                                        role="menuitem"
                                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700"
                                    >
                                        {{ $nav_links['name'] }}
                                    </a>
                                </div>
                            @endcan

                        @endforeach

                    @endif

                </div>
            </div>
        @endforeach

    </nav>
    <!-- Sidebar footer -->
    <div class="flex-shrink-0 p-2 border-t max-h-14">
        <button
            class="flex items-center justify-center w-full px-4 py-2 space-x-1 font-medium tracking-wider uppercase bg-gray-100 border rounded-md focus:outline-none focus:ring"
        >
            <span>
              <svg
                  class="w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
              >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                />
              </svg>
            </span>
            <span :class="{'lg:hidden': !isSidebarOpen}"> Logout </span>
        </button>
    </div>
</aside>

