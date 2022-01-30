<div>

    <section class=" pb-8">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 my-8">
                @foreach($teachers as $teacher)
                    <x-teacher-item :teacher="$teacher"/>


                @endforeach
            </div>
            {{ $teachers->links() }}
        </div>
    </section>

</div>
