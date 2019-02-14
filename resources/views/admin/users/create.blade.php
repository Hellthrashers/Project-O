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
        {!! Form::text('email', null, ['class' => 'form-control','placeholder' => 'Correo electronico','required']) !!}
    </div>

{!! Form::close() !!}
@endsection