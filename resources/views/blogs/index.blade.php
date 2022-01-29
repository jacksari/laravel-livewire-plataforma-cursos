<x-app-layout>


    <div class="min-w-screen min-h-screen bg-blue-100 flex items-center p-5 lg:p-20 overflow-hidden relative">
        <div class="flex-1 min-h-full min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
            <div class="w-full md:w-1/2">
                <div class="mb-10 lg:mb-20">
                    <img class="h-12 w-12" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png">
                </div>
                <div class="mb-10 md:mb-20 text-gray-600 font-light">
                    <h1 class="font-black uppercase text-3xl lg:text-5xl text-indigo-700 mb-10">En construcción</h1>
                    <p>Sentimos las molestias.</p>
                    <p>Podrías visitar nuestros cursos por el momento.</p>
                    <div class="mt-4 mb-20 md:mb-0">
                        <a class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-blue-500 hover:text-blue-600" href="{{ route('courses.index') }}">Cursos</a>
                    </div>

                </div>
            </div>
            <div class="w-full text-center px-8">
                <img class="object-cover rounded-md" src="https://res.cloudinary.com/mikunaalli/image/upload/v1636671160/micole/pexels-max-fischer-5212333_husyz2.jpg" class="w-64 h-64">

            </div>
        </div>
        <div class="w-64 md:w-96 h-96 md:h-full bg-blue-200 bg-opacity-30 absolute -top-64 md:-top-96 right-20 md:right-32 rounded-full pointer-events-none -rotate-45 transform"></div>
        <div class="w-96 h-full bg-indigo-200 bg-opacity-20 absolute -bottom-96 right-64 rounded-full pointer-events-none -rotate-45 transform"></div>
    </div>


</x-app-layout>
