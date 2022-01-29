<div>

    <section class=" pb-8">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-8">
                @foreach($teachers as $teacher)
                    <article class="bg-white rounded-md overflow-hidden shadow">
                        <a class="" href="{{ route('teachers.show', $teacher) }}">
                            <img src="{{ $teacher->image }}" alt="{{ $teacher->user->name }}">
                            <div class="p-2 text-center">
                                <h3 class="text-base text-background">{{ $teacher->user->name }}</h3>
                                <h4 class="text-sm text-background">{{ strlen($teacher->title) > 36 ? substr($teacher->title, 0, 36)."..." : $teacher->title }}</h4>
                            </div>
                        </a>
                        <div class="flex items-center justify-around p-2">
                            <a target="_blank" href="{{ $teacher->website }}">
                                <i class="text-lg fas fa-globe text-gray-500 hover:text-primary-500 transition duration-500 ease-in-out"></i>
                            </a>
                            <a target="_blank" href="{{ $teacher->linkdin }}">
                                <i class="text-lg fab fa-linkedin text-gray-500 hover:text-primary-500 transition duration-500 ease-in-out"></i>
                            </a>
                        </div>

                    </article>


                @endforeach
            </div>
            {{ $teachers->links() }}
        </div>
    </section>

</div>
