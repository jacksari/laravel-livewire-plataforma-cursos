<x-app-layout>

    <section class="bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url({{asset('img/home/home.jpg')}})">
        <div class="container py-28">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-5xl">Domina la tecnología con JackSari</h1>
                <p class="text-white text-lg mt-4">Aprende Laravel con los mejores cursos de programación. Contamos con cursos tanto teóricos como prácticos.</p>

                <div class="bg-white flex justify-between items-center p-1 rounded mt-4">
                    <input placeholder="Buscar curso" type="text" class="pl-3 w-full border-none h-9 shadow-none flex-1 right-0 focus:ring-0 pl-2"/>
                    <div class="p-1 flex justify-center items-center w-9 h-9 btn-primary">
                        <i class="fas fa-search text-white text-lg"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container py-16 text-center">
            <h2 class="text-3xl font-medium text-gray-700">Contenido</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                <article class="">
                    <img class="rounded-2xl object-cover" src="{{asset('img/home/cursos.jpeg')}}" alt="Cursos JackSari">
                    <h3 class="text-lg mt-3 font-semibold">Cursos y proyectos</h3>
                    <p class="text-sm mt-3 text-gray-600">Encuentra una gran variedad de cursos y proyectos en Laravel, totalmente gratis</p>
                </article>
                <article class="">
                    <img class="rounded-2xl object-cover" src="{{asset('img/home/manuales.jpeg')}}" alt="Cursos JackSari">
                    <h3 class="text-lg mt-3 font-semibold">Manuales</h3>
                    <p class="text-sm mt-3 text-gray-600">Hemos traducido la documentación oficial, para ayudarte en tu proceso de aprendizaje</p>
                </article>
                <article class="">
                    <img class="rounded-2xl object-cover" src="{{asset('img/home/blog.jpeg')}}" alt="Cursos JackSari">
                    <h3 class="text-lg mt-3 font-semibold">Blog</h3>
                    <p class="text-sm mt-3 text-gray-600">Artículos de programación y desarrollo web, para potenciar tu aprendizaje</p>
                </article>
                <article class="">
                    <img class="rounded-2xl object-cover" src="{{asset('img/home/desarrollo.jpeg')}}" alt="Cursos JackSari">
                    <h3 class="text-lg mt-3 font-semibold">Desarrollo web</h3>
                    <p class="text-sm mt-3 text-gray-600">Si se te hace dificil aprender a programar, contáctanos y nosotros desarrollamos tu sitio web</p>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-black">
        <div class="container py-16 text-center">
             <h2 class="text-white text-4xl font-medium">Get Our Updates</h2>
            <p class="text-white text-md my-4">Find out about events and other news</p>
            <div class="bg-white flex justify-between items-center p-1 rounded mt-4 w-1/2 mx-auto">
                <input placeholder="ejemplo@correo.com" type="text" class="pl-3 w-full border-none h-9 shadow-none flex-1 right-0 focus:ring-0 pl-2"/>
                <div class="btn btn-primary flex justify-center items-center h-9">
                    <p class=" text-white text-lg px-3">Subscriber</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100">
        <div class="container py-16 text-center">
            <h2 class="text-3xl font-medium text-gray-700">ÚLTIMOS CURSOS</h2>
            <p class=" text-md my-4 text-gray-700">Enterate cuales son los ultimos cursos subidos</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
                @foreach($courses as $course)
                    <x-course-item :course="$course"/>
                @endforeach
            </div>
        </div>
    </section>



</x-app-layout>
