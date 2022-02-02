<div class="">
    <div class="sticky top-0 bg-white shadow-sm rounded-sm border border-gray-200 p-3 flex flex-col">
        <a
           href="{{ route('admin.courses.edit', $course) }}"
           class="border-l-4 pl-2 mb-4 {{request()->routeIs('admin.courses.edit') ? 'border-primary-500' : 'border-gray-400' }}"
        >Información del curso</a>

        <a
            href="{{ route('admin.courses.sections', $course) }}"
            class="border-l-4 pl-2 mb-4 {{request()->routeIs('admin.courses.sections') ? 'border-primary-500' : 'border-gray-400' }}"
        >Lecciones del curso</a>

        <a href="#" class="border-l-4 border-gray-400 pl-2 mb-4">Metas del curso</a>
        <a href="#" class="border-l-4 border-gray-400 pl-2 mb-4">Estudiantes</a>
    </div>
</div>
