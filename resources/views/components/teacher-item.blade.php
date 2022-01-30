@props(['teacher'])

<article class="bg-white rounded-md overflow-hidden shadow">
    <a class="" href="{{ route('teachers.show', $teacher) }}">
        <img class="h-80 object-cover object-center" src="{{ $teacher->image }}" alt="{{ $teacher->user->name }}">
        <div class="p-2 text-center">
            <h3 class="text-base text-background font-semibold text-background">{{ $teacher->user->name }}</h3>
            <h4 class="text-sm text-background text-gray-500">{{ strlen($teacher->title) > 36 ? substr($teacher->title, 0, 36)."..." : $teacher->title }}</h4>
        </div>
    </a>
    <div class="flex items-center justify-around p-2">
        @if($teacher->website)
            <a target="_blank" href="{{ $teacher->website }}">
                <i class="text-lg fas fa-globe text-gray-500 hover:text-primary-500 transition duration-500 ease-in-out"></i>
            </a>
        @endif
            @if($teacher->facebook)
                <a target="_blank" href="{{ $teacher->facebook }}">
                    <i class="text-lg fab fa-facebook text-gray-500 hover:text-primary-500 transition duration-500 ease-in-out"></i>
                </a>
            @endif
            @if($teacher->twitter)
                <a target="_blank" href="{{ $teacher->twitter }}">
                    <i class="text-lg fab fa-twitter text-gray-500 hover:text-primary-500 transition duration-500 ease-in-out"></i>
                </a>
            @endif
            @if($teacher->linkedin)
                <a target="_blank" href="{{ $teacher->linkedin }}">
                    <i class="text-lg fab fa-linkedin text-gray-500 hover:text-primary-500 transition duration-500 ease-in-out"></i>
                </a>
            @endif

    </div>

</article>
