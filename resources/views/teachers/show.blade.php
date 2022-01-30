<x-app-layout>

    <section class="py-16">
        {{-- TODO hacer responsive --}}
       <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
           <div class="grid grid-cols-7 gap-8">
               <div class="col-span-5">
                   <p class="text-lg text-gray-500 font-semibold">INSTRUCTOR</p>
                   <h1 class="text-background text-5xl my-2 font-bold">{{ $teacher->user->name }}</h1>
                   <h2 class="text-base text-background my-2 font-bold">{{ $teacher->title }}</h2>
                   <div class="flex items-center my-4">
                       {{-- TODO agrgar cantidad de estudiantes y valoraciones --}}
                       <div class="mr-8">
                           <h4 class="text-sm text-gray-500 font-bold">Total de estudiantes</h4>
                           <p class="text-2xl text-background font-bold">268.586</p>
                       </div>
                       <div>
                           <h4 class="text-sm text-gray-500 font-bold">Valoraciones</h4>
                           <p class="text-2xl text-background font-bold">26.586</p>
                       </div>
                   </div>
                   <div class="my-8">
                       <h2 class="text-background text-lg font-bold mb-2">Sobre mí</h2>
                       <p>{{ $teacher->content }}</p>
                   </div>
                   <div class="my-8">
                       <h2 class="text-background text-lg font-bold mb-2">Mis cursos</h2>
                       <div class="my-4 grid grid-cols-2 gap-4">
                           @foreach($teacher->courses as $course)
                               <x-course-item :course="$course"/>
                           @endforeach
                       </div>
                   </div>

               </div>
               <div class="col-span-2">
                   <img class="h-48 w-48 rounded-full object-cover" src="{{ $teacher->image }}" alt="{{ $teacher->user->name }}">

                   <a target="_blank" href="{{ $teacher->website }}" class="mt-8 font-bold bg-primary-500 shadow px-4 text-white border-2 rounded-none border-primary-500 flex justify-center items-center w-full py-2">

                       Enviar mensaje
                   </a>
                   @if($teacher->website)
                       <div class="w-full my-2 flex">
                           <a target="_blank" href="{{ $teacher->website }}" class="font-bold bg-white shadow px-4 text-background border-2 rounded-none border-background flex justify-center items-center w-full py-2">
                               <i class="mr-2 text-lg fas fa-globe text-background transition duration-500 ease-in-out"></i>
                               Sitio web
                           </a>
                       </div>
                   @endif

                   @if($teacher->facebook)
                       <div class="w-full my-2 flex">
                           <a target="_blank" href="{{ $teacher->facebook }}" class="font-bold bg-white shadow px-4 text-background border-2 rounded-none border-background flex justify-center items-center w-full py-2">
                               <i class="mr-2 text-lg fab fa-facebook text-background transition duration-500 ease-in-out"></i>
                               Facebook
                           </a>
                       </div>
                   @endif
                   @if($teacher->twitter)
                       <div class="w-full my-2 flex">
                           <a target="_blank" href="{{ $teacher->twitter }}" class="font-bold bg-white shadow px-4 text-background border-2 rounded-none border-background flex justify-center items-center w-full py-2">
                               <i class="mr-2 text-lg fab fa-twitter text-background transition duration-500 ease-in-out"></i>
                               Twitter
                           </a>
                       </div>
                   @endif
                   @if($teacher->linkedin)
                       <div class="w-full my-2 flex">
                           <a target="_blank" href="{{ $teacher->linkedin }}" class="font-bold bg-white shadow px-4 text-background border-2 rounded-none border-background flex justify-center items-center w-full py-2">
                               <i class="mr-2 text-lg fab fa-linkedin text-background transition duration-500 ease-in-out"></i>
                               Linkedin
                           </a>
                       </div>
                   @endif
                   @if($teacher->youtube)
                       <div class="w-full my-2 flex">
                           <a target="_blank" href="{{ $teacher->youtube }}" class="font-bold bg-white shadow px-4 text-background border-2 rounded-none border-background flex justify-center items-center w-full py-2">
                               <i class="mr-2 text-lg fab fa-youtube text-background transition duration-500 ease-in-out"></i>
                               Youtube
                           </a>
                       </div>
                   @endif

               </div>


           </div>
       </div>
    </section>

</x-app-layout>
