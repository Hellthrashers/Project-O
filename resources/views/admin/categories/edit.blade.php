@extends('admin.template.main')
@section('title', 'Editar Categoria '. $category->name)
    
@section('content')
{!! Form::open(['method' => 'PUT','route' => ['categories.update', $category->id]]) !!}

    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $category->name, ['class' => 'form-control','placeholder' => 'Nombre completo','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
@endsection