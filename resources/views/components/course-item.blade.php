@props(['course'])

<article class="bg-white rounded-md overflow-hidden shadow flex flex-col">
    <div class="relative bg-black">
        <img src="{{asset(str_replace("public", "", $course->image->url))}}" alt="">
        <p class="absolute top-2 right-2 bg-primary-500 rounded text-white px-3">{{ $course->category->name }}</p>
    </div>

    <div class="p-4 text-left flex-1 flex flex-col justify-between">
        <h3 class="text-lg text-gray-700">{{ strlen($course->title) > 48 ? substr($course->title, 0, 48)."..." : $course->title }} </h3>

        <div class="">
            <p class="text-sm text-gray-500 my-2">Prof: {{ $course->teacher->name }}</p>
            <div class="flex justify-between items-center mb-3">
                <div class="flex items-center">
                    <i class="fas fa-star {{$course->rating >= 1 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                    <i class="fas fa-star {{$course->rating >= 2 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                    <i class="fas fa-star {{$course->rating >= 3 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                    <i class="fas fa-star {{$course->rating >= 4 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                    <i class="fas fa-star {{$course->rating == 5 ? 'text-yellow-300' : 'text-yellow-200'}}"></i>
                </div>

                <div class="flex items-center">
                    <i class="fas fa-users text-gray-600 mr-1"></i>
                    <p class="text-xs text-gray-600">( {{ $course->students_count }} )</p>
                </div>
            </div>
            <div class="w-full flex">
                <a href="{{ route('courses.show', $course) }}" class="btn btn-primary w-full">Más información</a>
            </div>
        </div>

    </div>
</article>
