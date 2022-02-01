<div class="w-full grid grid-cols-3 gap-4 ">
    <div>
        <div class=" py-1">
            {!! Form::label('title', 'Título: ', ['class' => 'label-input']) !!}
            <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
                {!! Form::text('title', null, ['class' => 'input-form'. ($errors->has('title') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un título de profesor']) !!}
            </div>
            @error('title')
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
    </div>
    <div class="col-span-2">
        <div class="py-1 flex  h-full items-center">
            {!! Form::label('image', 'Imagen: ', ['class' => 'label-input mr-8 self-start']) !!}
            @if(isset($teacher))
                <img id="picture-teacher" class="h-32 w-32 rounded-full object-cover object-center" src="{{asset(str_replace("public", "storage", $teacher->image))}}" alt="{{ $teacher->user->name }}">
            @else
                <img id="picture-teacher" class="h-32 w-32 rounded-full object-cover object-center" src="https://www.azendportafolio.com/static/img/not-found.png" alt="">

            @endif
            <div class=" space-y-2 ml-8">
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

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-4 gap-y-0 py-1">
    <div class="">
        {!! Form::label('website', 'Sitio web: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::text('website', null, ['class' => 'input-form'. ($errors->has('website') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba el sitio web del docente']) !!}
        </div>
        @error('website')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        {!! Form::label('facebook', 'Facebook: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::text('facebook', null, ['class' => 'input-form'. ($errors->has('facebook') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba el facebook del docente']) !!}
        </div>
        @error('facebook')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        {!! Form::label('twitter', 'Twitter: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::text('twitter', null, ['class' => 'input-form'. ($errors->has('twitter') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba el twitter del docente']) !!}
        </div>
        @error('twitter')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        {!! Form::label('linkedin', 'Linkedin: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::text('linkedin', null, ['class' => 'input-form'. ($errors->has('linkedin') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba el linkedin del docente']) !!}
        </div>
        @error('linkedin')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
    <div class="">
        {!! Form::label('youtube', 'Youtube: ', ['class' => 'label-input']) !!}
        <div class="my-1 bg-white p-1 flex border border-gray-200 rounded">
            {!! Form::text('youtube', null, ['class' => 'input-form'. ($errors->has('youtube') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba el youtube del docente']) !!}
        </div>
        @error('youtube')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="w-full py-1 mb-4">
    <div class="mb-1">
        {!! Form::label('description', 'Content: ', ['class' => 'label-input']) !!}
    </div>
    {!! Form::textarea('description', null, ['class' => 'input-form'. ($errors->has('description') ? ' border-primary-500 border-2' : ''), 'placeholder' => 'Escriba un contenido del profesor']) !!}

</div>

