@auth
    <x-layouts.main>
        <x-slot:title>Acerca de Nosotros</x-slot:title>

        <h1>Acerca de BiteGuard</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam exercitationem nihil ab dolorum dicta quae soluta eius debitis cupiditate nam voluptates, nobis dolor, similique, at repellat temporaadipisci ipsam alias?</p>
    </x-layouts.main>
@endauth

@guest
    <x-layouts.guest>
        <x-slot:title>Acerca de Nosotros</x-slot:title>

        <h1>Acerca de BiteGuard</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam exercitationem nihil ab dolorum dicta quae soluta eius debitis cupiditate nam voluptates, nobis dolor, similique, at repellat temporaadipisci ipsam alias?</p>
    </x-layouts.guest>
@endguest