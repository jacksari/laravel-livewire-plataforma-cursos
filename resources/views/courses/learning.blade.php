<x-learning-layout>

    @livewire('course-learning')

    <script>
        document.addEventListener('livewire:load', function () {
            console.log('Cargando...')
            const player = new Plyr('#player');
            console.log('PLAYER', player)

        })
    </script>

</x-learning-layout>
