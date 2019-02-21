@extends('admin.template.main')
@section('title', 'Lista de categorias')

@section('content')
<a href="{{ route('categories.create') }}" class="btn btn-info">Registrar Categoria</a><br><br>
    <table class="table table-stripped">
        <thead>
        <th>ID</th>
        <th>Categoria</th>
        <th>Acción</th> 
        </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>
                    {{$category->id}}
                </td>
                <td>
                    {{$category->name}}
                </td>
                <td>
                   <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a> 
                   <a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro que desea eliminar el registro?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></a> 
                </td>
                
            </tr>    
        @endforeach
    </tbody>
    </table>
    {{ $categories->links()}}
@endsection

