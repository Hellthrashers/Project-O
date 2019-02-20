@extends('admin.template.main')
@section('title', 'Lista de usuarios')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-info">Registrar Usuario</a><br><br>
    <table class="table table-stripped">
        <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Tipo</th>
        <th>Acción</th> 
        </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    @if($user->type == "admin")
                        <span class="btn btn-danger">{{$user->type}}</span>
                    @else
                        <span class="btn btn-primary">{{$user->type}}</span> 
                    @endif
                    
                </td>
                <td>
                   <a href="{{ route('users.edit', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></a> 
                   <a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro que desea eliminar el registro?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a> 
                </td>
                
            </tr>    
        @endforeach
    </tbody>
    </table>
    {{ $users->links()}}
@endsection

