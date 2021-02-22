<div class="grid grid-cols-3 gap-4 mt-8">
<!-- Todo componente tiene que tener un div como contenedor -->
    {{-- In work, do what you enjoy. --}}
    <!-- declaramos nuestro foreach para recorer nuestros cursos -->
    @foreach($courses as $course)
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="#">
        <img src="{{$course->image}}" alt="" srcset="" class="rounded-mb mb-2">
        </a>
        <h2 class="text-lg text-gray-600 truncate uppercase">{{$course->name}}</h2>
        <h3 class="text-md text-gray-400" >{{$course->excerpt}}</h3>
<!-- un curso tiene un usuario y ese usario tiene una img de perfil hasta ese moemnto estos son campos virtuales que estaremos configurando
mas a fondo -->
        <img src="{{$course->user->avatar}}" alt="" srcset="" class="rounded-full  mt-4 mx-auto h-16 w-16">
    </div>
    @endforeach
</div>
