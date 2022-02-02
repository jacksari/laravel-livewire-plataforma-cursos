<div class="w-full py-1">
    {!! Form::label('title', 'Título: ', ['class' => 'label-input']) !!}
    <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
        {!! Form::text('title', null, ['class' => 'input-form'. ($errors->has('title') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un título del curso']) !!}
    </div>
    @error('title')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="w-full py-1">
    {!! Form::label('subtitle', 'Subtítulo: ', ['class' => 'label-input']) !!}
    <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
        {!! Form::text('subtitle', null, ['class' => 'input-form'. ($errors->has('subtitle') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un subtítulo del curso']) !!}
    </div>
    @error('subtitle')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>

<div class="w-full py-1">
    {!! Form::label('slug', 'Slug: ', ['class' => 'label-input']) !!}
    <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
        {!! Form::text('slug', null, ['class' => 'input-form'. ($errors->has('slug') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un slug para el profesor']) !!}
    </div>
    @error('slug')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>

{{-- TODO agregar video como archuvo y no un link de youtube --}}

<div class="w-full py-1">
    {!! Form::label('video', 'Video: ', ['class' => 'label-input']) !!}
    <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
        {!! Form::text('video', null, ['class' => 'input-form'. ($errors->has('video') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba el código de youtube']) !!}
    </div>
    @error('video')
    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>


<div class="w-full py-1 mb-4">
    <div class="mb-1">
        {!! Form::label('description', 'Content: ', ['class' => 'label-input']) !!}
    </div>
    {!! Form::textarea('description', null, ['class' => 'input-form'. ($errors->has('description') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un contenido del profesor']) !!}
</div>

<div class="w-full py-1 mb-4 grid grid-cols-3 gap-4">
    <div>
        {!! Form::label('category_id', 'Categoría: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::select('category_id', $categories, null, ['class' => 'input-form', 'placeholder' => 'Elige una categoría']) !!}
        </div>
    </div>
    <div>
        {!! Form::label('level_id', 'Nivel: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::select('level_id', $levels, null, ['class' => 'input-form', 'placeholder' => 'Elige un nivel']) !!}
        </div>
    </div>
    <div>
        {!! Form::label('price_id', 'Precio: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::select('price_id', $prices, null, ['class' => 'input-form', 'placeholder' => 'Elige una precio']) !!}
        </div>
    </div>
</div>


<div class="w-full py-1 mb-4">
    <div class="h-full items-center">
        {!! Form::label('image', 'Imagen: ', ['class' => 'label-input mr-8 self-start']) !!}
        <div class="grid grid-cols-2 mt-2">
            @if(isset($course))
                <img id="picture-teacher" class="h-60 w-full rounded-md object-cover object-center" src="{{ asset(str_replace("public", "storage", $course->image->url)) }}">
            @else
                <img id="picture-teacher" class="h-60 w-full rounded-md object-cover object-center" src="https://www.azendportafolio.com/static/img/not-found.png" alt="">

            @endif
            <div class="flex-1 space-y-2 ml-8">
                <label class="text-sm font-bold text-gray-500 tracking-wide">Attach Document</label>
                <div class="flex items-center justify-center w-full">
                    <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-40 p-5 group text-center">
                        <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                            <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a href="" id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
                        </div>
                        {!! Form::file('image', ['class' => 'hidden']) !!}
                    </label>
                </div>
            </div>
        </div>

    </div>
</div>
