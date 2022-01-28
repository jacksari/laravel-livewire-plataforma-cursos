<div>

    <div class="bg-gray-200 py-8 ">
        <div class="container flex">
            <button wire:click="resetFilters" class="flex items-center mr-4 btn focus:outline-red">
                <i class="fas fa-archway text-xs mr-2"></i>
                Todos los cursos
            </button>
            <div x-data="{ dropdownOpen: false }" class="relative mr-4">
                <button @click="dropdownOpen = !dropdownOpen" class="flex items-center bg-white shadow h-10 px-4 rounded-lg text-gray-700 font-medium focus:outline-red">
                    <i class="text-xs fas fa-tags mr-2"></i>
                    Categorías
                    <i class="fas fa-chevron-down ml-2"></i>
                </button>

                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                    @foreach($categories as $category)
                        <a wire:click="$set('category_id', {{ $category->id }})" x-on:click="dropdownOpen = false" class="cursor-pointer block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div x-data="{ dropdownOpen: false }" class="relative mr-4">
                <button @click="dropdownOpen = !dropdownOpen" class="flex items-center bg-white shadow h-10 px-4 rounded-lg text-gray-700 font-medium focus:outline-red">
                    <i class="text-xs mr-2 fas fa-layer-group"></i>
                    Niveles
                    <i class="fas fa-chevron-down ml-2"></i>
                </button>

                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                    @foreach($levels as $level)
                        <a wire:click="$set('level_id', {{ $level->id }})" x-on:click="dropdownOpen = false" class="cursor-pointer block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                            {{ $level->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <section class=" pb-8">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-8">
                @foreach($courses as $course)
                    <x-course-item :course="$course"/>
                @endforeach
            </div>
            {{ $courses->links() }}
        </div>
    </section>



</div>
