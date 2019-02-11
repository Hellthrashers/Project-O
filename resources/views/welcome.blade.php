{{-- EXTRAEMOS EL ESTILO DEL TEMPLATE MAIN --}}
@extends('admin.template.main')
{{-- EXTRAEMOS LA SECCION DEL TITLE --}}
@section('title')
   Inicio de mi pagina 
@endsection
{{-- EXTRAEMOS LA SECCION DE NUESTRO BODY --}}
@section('content')
    <h1>Hola esto es bootstrap</h1>
    <a href="" class="btn btn-success"> Soy un boton</a>
@endsection