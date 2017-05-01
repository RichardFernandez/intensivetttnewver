@extends('admin.template.backend')

@section('title', 'Lista de Medidas') 

@section('content')
     
    <a href="{{route('admin.medidas.create')}}" class="btn btn-info">Registrar nueva medida</a>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table table-striped">
         <caption>Lista de medidas registradas</caption>
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre de medida</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($medidas as $medida)
             <tr>
                 <td>{{ $medida->id }}</td>
                 <td>{{ $medida->nombre_medida }}</td>
                 <td> <a href="{{ route('admin.medidas.edit', $medida->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
                 <td><a href="{{ route('admin.medidas.destroy', $medida->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $medidas->render() !!}
@stop