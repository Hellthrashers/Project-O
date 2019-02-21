@extends('admin.template.main')
@section('title', 'Agregar Categoria')

@section('content')

{!! Form::open(['route' => 'categories.index']) !!}

    <div class="form-group">
        {!! Form::label('name','Nombre Categoría') !!}
        {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Categoría','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}

@endsection