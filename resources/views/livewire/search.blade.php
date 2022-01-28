<div class="relative">
    <form class="bg-white flex justify-between items-center p-1 rounded mt-4" autocomplete="off">
        <input wire:model="search" placeholder="Buscar curso" type="text" class="pl-3 w-full border-none h-9 shadow-none flex-1 right-0 focus:ring-0 pl-2"/>
        <button class="p-1 flex justify-center items-center w-9 h-9 btn-primary">
            <i class="fas fa-search text-white text-lg"></i>
        </button>
    </form>
    <div class="mt-2 rounded overflow-hidden absolute left-0 w-full shadow z-50">

        @if(\Illuminate\Support\Str::length($search) >= 2)
            @forelse($this->results as $result)
                <a href="{{ route('courses.show', $result) }}" class="text-xs md:text-base z-30 flex items-center h-9 px-1 md:px-3 py-1 bg-white cursor-pointer border-t hover:bg-gray-300 leading-10">{{ $result->title }}</a>
            @empty
                <p class="flex items-center h-9 px-3 py-1 bg-white border-t leading-10">No encontramos un curso con ese nombre</p>
            @endforelse
        @endif
    </div>
</div>
