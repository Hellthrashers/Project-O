@extends('admin.template.main')
@section('title', 'Editar usuario '. $user->name)
    
@section('content')
{!! Form::open(['route' => ['users.edit', $user->id]]) !!}

    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', $user->name, ['class' => 'form-control','placeholder' => 'Nombre completo','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Correo Electronico') !!}
        {!! Form::text('email', $user->email, ['class' => 'form-control','placeholder' => 'Correo electrónico','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type', [''=>'Seleccione un nivel','member' =>'Miembro','admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar',['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
@endsection