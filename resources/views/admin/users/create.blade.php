@extends('admin.template.main')
@section('title', 'crear usuario')
    
@section('content')
{!! Form::open(['route' => 'users.store']) !!}

    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'Nombre completo','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Correo Electronico') !!}
        {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'Correo electrónico','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Contraseña') !!}
        {!! Form::password('password', ['class' => 'form-control','placeholder' => 'Contraseña','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type', 'Tipo') !!}
        {!! Form::select('type', [''=>'Seleccione un nivel','member' =>'Miembro','admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
    </div>



{!! Form::close() !!}
@endsection