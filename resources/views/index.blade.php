
{{-- extendiende de layouts.app --}}
{{ $dato }}
@extends('layouts.app')
{{-- reemplaza los yield --}}
@section('title',"Algun titulo :D")
@section('content')
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam commodi autem ratione impedit harum, eveniet similique sit, laborum ut rerum, tenetur nulla modi ullam consectetur vel. Sapiente explicabo quis accusamus?</p>
    @include('helpers.saludo',["nombre"=>"Chicho proyectos"])
    @php
        echo "<br>esto es php puro";
    @endphp
@endsection
