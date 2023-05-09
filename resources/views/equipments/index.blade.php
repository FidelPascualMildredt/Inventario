@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Equipos</h1>
    {{--  <a href="{{ route('') }}" title="Agregar nuevo Usuario" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">  --}}
        <i class="fas fa-plus"></i>
        Agregar
    </a>
</div>
<x-table titulo="Lista de Equipos">
    <x-slot name='encabezado'>
        <th>#
        </th>
        <th>Numero de serie</th>
        <th>Ubicación</th>
        <th>Estado</th>
        <th>Usuario</th>
        <th>QR</th>
        <th>Opciones</th>
    </x-slot>
    <x-slot name='cuerpo'>
        {{--  @foreach ($equipments as $equipments)
            <tr>
                <td>{{ $equipment->id }}</td>
                <td>{{ $equipment->serial_number }}</td>
                <td>{{ $equipment->location }}</td>
                <td>{{ $equipment->status }}</td>
                <td>{{ $equipment->user }}</td>
                <td>{{ $equipment->QR }}</td>
                <td>  --}}
                    {{--  <a href="{{ route('', ['equipment'=> $equipment->id]) }}" class="btn btn-success btn-circle btn-sm" title="Editar Usuario">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('', ['equipment'=> $equipment->id]) }}" class="btn btn-info btn-circle btn-sm" title="Ver Usuario">
                        <i class="fas fa-eye"></i>
                    </a>
                    <form action=" users/{{$equipment->id}}" method="POST">
                        @csrf
                         @method("delete")
                                 <button  class="btn btn-danger btn-circle btn-sm" title="Eliminar Usuario">
                              <i class="fas fa-trash"></i></button>
                        </form>  --}}
{{--
                </td>
            </tr>
        @endforeach  --}}
    </x-slot>
</x-table>

@endsection
