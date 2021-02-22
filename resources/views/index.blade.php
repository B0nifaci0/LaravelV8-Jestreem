@extends('layouts.web')
<!--  -->
@section('content')
<div class="text-center">
    <h1 class= "text-3xl text-gray-700 mb-2 uppercase">Últimos Cursos</h1>
    <h2>Formate con Cursoss Onlinef</h1>
    <h3>70 % de los graduados duplica sus ingresos</h1>
</div>
<!-- tecnologia de livewire a traves de componente con ste framework -->
<!-- Dentro de una vista puedes agregar una x cantidad de componentes -->
<livewire:course-list>
@endsection
