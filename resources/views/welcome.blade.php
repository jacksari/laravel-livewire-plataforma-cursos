<x-app-layout>

    <section class="bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url({{asset('img/home/home.jpg')}})">
        <div class="container py-28">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-5xl">Domina la tecnología con JackSari</h1>
                <p class="text-white text-lg mt-4">Aprende Laravel con los mejores cursos de programación. Contamos con cursos tanto teóricos como prácticos.</p>

                @livewire('search')
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
            <div class="bg-white flex justify-between items-center p-1 rounded mt-4 w-full md:w-1/2 mx-auto">
                <input placeholder="ejemplo@correo.com" type="text" class="pl-3 w-full border-none h-9 shadow-none flex-1 right-0 focus:ring-0 pl-2"/>
                <div class="btn btn-primary flex justify-center items-center h-9">
                    <p class=" text-white text-lg px-1 md:px-3">Subscriber</p>
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

    <section class="relative pt-16 bg-blueGray-50">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-10/12 md:w-6/12 lg:w-4/12 px-12 md:px-4 mr-auto ml-auto -mt-78">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded-lg bg-pink-500">
                        <img alt="..." src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=700&amp;q=80" class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="absolute left-0 w-full block h-95-px -top-94-px">
                                <polygon points="-30,95 583,95 583,65" class="text-pink-500 fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Great for your awesome project
                            </h4>
                            <p class="text-md font-light mt-2 text-white">
                                Putting together a page has never been easier than matching
                                together pre-made components. From landing pages presentation
                                to login areas, you can easily customise and built your pages.
                            </p>
                        </blockquote>
                    </div>
                </div>

                <div class="w-full md:w-6/12 px-4">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-sitemap"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">CSS Components</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Notus JS comes with a huge number of Fully Coded CSS
                                        components.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-drafting-compass"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">
                                        JavaScript Components
                                    </h6>
                                    <p class="mb-4 text-blueGray-500">
                                        We also feature many dynamic components for React, NextJS,
                                        Vue and Angular.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="w-full md:w-6/12 px-4">
                            <div class="relative flex flex-col min-w-0 mt-4">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-newspaper"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Pages</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        This extension also comes with 3 sample pages. They are
                                        fully coded so you can start working instantly.
                                    </p>
                                </div>
                            </div>
                            <div class="relative flex flex-col min-w-0">
                                <div class="px-4 py-5 flex-auto">
                                    <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-white">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <h6 class="text-xl mb-1 font-semibold">Documentation</h6>
                                    <p class="mb-4 text-blueGray-500">
                                        Built by developers for developers. You will love how easy
                                        is to to work with Notus JS.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200">
        <div class="container py-16 text-center">
            <h2 class="text-3xl font-medium text-gray-700">BUSCA TU CURSO IDEAL</h2>
            <div class="w-full md:w-1/2 mx-auto mt-8">
                @livewire('search')
            </div>
        </div>
    </section>

    <div class="pb-16" style="font-family: 'Lato', sans-serif">
        <!-- Code block starts -->
        <dh-component>
            <section class="max-w-8xl mx-auto container bg-white pt-16">
                <div>
                    <div role="contentinfo" class="flex items-center flex-col px-4">
                        <p tabindex="0" class="focus:outline-none uppercase text-sm text-center text-gray-600 leading-4">in few easy steps</p>
                        <hh1 tabindex="0" class="focus:outline-none text-4xl lg:text-4xl font-extrabold text-center leading-10 text-gray-800 lg:w-5/12 md:w-9/12 pt-4">Create Beautiful Landing Pages & Web Apps in a Jiffy</hh1>
                    </div>
                    <div tabindex="0" aria-label="group of cards" class="focus:outline-none mt-20 flex flex-wrap justify-center gap-10 px-4">
                        <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG1.svg" alt="drawer">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-bold leading-tight text-gray-800">Ready to use components</h2>
                                <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p>
                            </div>
                        </div>
                        <div tabindex="0" aria-label="card 2" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG2.svg" alt="check">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-gray-800">Hight Quality UI you can reply on</h2>
                                <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">Modify the visual appearance of your site – including colors, fonts, margins and other style-related properties – with a sophisticated style.</p>
                            </div>
                        </div>
                        <div tabindex="0" aria-label="card 3" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG3.svg" alt="html tag">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-gray-800">Coded by Developers for Developers</h2>
                                <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">Instead of just giving you the tools to create your own site, they offer you a list of themes you can choose from. Thus a handy product.</p>
                            </div>
                        </div>
                        <div tabindex="0" aria-label="card 4" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                            <div class="w-20 h-20 relative mr-5">
                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                <div class="absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/icon_and_text-SVG4.svg" alt="monitor">
                                </div>
                            </div>
                            <div class="w-10/12">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-gray-800">The Last UI kit you’ll ever need</h2>
                                <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2">We have chosen the bright color palettes that arouse the only positive emotions. The kit that simply assures to be loved by everyone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </dh-component>
        <!-- Code block ends -->
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    </div>

    <div class="h-screen bg-gradient-to-br from-pink-50 to-indigo-100 grid place-items-center">
        <div class="w-6/12 mx-auto rounded border">
            <div class="bg-white p-10 shadow-sm">
                <h3 class="text-lg font-medium text-gray-800">Several Windows stacked on each other</h3>
                <p class="text-sm font-light text-gray-600 my-3">
                    The accordion is a graphical control element comprising a vertically stacked list of items such as labels or thumbnails
                </p>

                <div class="h-1 w-full mx-auto border-b my-5"></div>

                <!-- What is term -->
                <div class="transition hover:bg-indigo-50">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="fas fa-plus"></i>
                        <h3>What is term?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6 font-light pl-9 text-justify">
                            Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
                            far daughter.
                        </p>
                        <button class="rounded-full bg-indigo-600 text-white font-medium font-lg px-6 py-2 my-5 ml-9">Learn more</button>
                    </div>
                </div>

                <!-- When to use Accordion Components -->
                <div class="transition hover:bg-indigo-50">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="fas fa-plus"></i>
                        <h3>When to use Accordion Components?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6 font-light pl-9 text-justify">
                            Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
                            far daughter.
                        </p>
                        <button class="rounded-full bg-indigo-600 text-white font-medium font-lg px-6 py-2 my-5 ml-9">Learn more</button>
                    </div>
                </div>

                <!-- Accordion Wrapper -->
                <div class="transition hover:bg-indigo-50">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="fas fa-plus"></i>
                        <h3>How can it be defined?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6 font-light pl-9 text-justify">
                            Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
                            far daughter.
                        </p>
                        <button class="rounded-full bg-indigo-600 text-white font-medium font-lg px-6 py-2 my-5 ml-9">Learn more</button>
                    </div>
                </div>

                <!-- Accordion Wrapper -->
                <div class="transition hover:bg-indigo-50">
                    <!-- header -->
                    <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                        <i class="fas fa-plus"></i>
                        <h3>Chamber reached do he nothing be?</h3>
                    </div>
                    <!-- Content -->
                    <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                        <p class="leading-6 font-light pl-9 text-justify">
                            Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put
                            far daughter.
                        </p>
                        <button class="rounded-full bg-indigo-600 text-white font-medium font-lg px-6 py-2 my-5 ml-9">Learn more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const accordionHeader = document.querySelectorAll(".accordion-header");
        accordionHeader.forEach((header) => {
            header.addEventListener("click", function () {
                const accordionContent = header.parentElement.querySelector(".accordion-content");
                let accordionMaxHeight = accordionContent.style.maxHeight;

                // Condition handling
                if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
                    accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
                    header.querySelector(".fas").classList.remove("fa-plus");
                    header.querySelector(".fas").classList.add("fa-minus");
                    header.parentElement.classList.add("bg-indigo-50");
                } else {
                    accordionContent.style.maxHeight = `0px`;
                    header.querySelector(".fas").classList.add("fa-plus");
                    header.querySelector(".fas").classList.remove("fa-minus");
                    header.parentElement.classList.remove("bg-indigo-50");
                }
            });
        });
    </script>

</x-app-layout>
