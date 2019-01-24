@extends('layout.master')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
 <div class="row">

    <div class="col-sm-4">

        <img src="{{$pelicula['poster']}}" style="height:400px"/>

    </div>
    <div class="col-sm-8">
		
        <h4 style="min-height:45px;margin:5px 0 10px 0">
			{{$pelicula['title']}}      
        </h4>
		<h5>
			<b>Año: </b>{{$pelicula['year']}}
		</h5>
		<h6>
			<b>Director: </b>{{$pelicula['director']}}
		</h6>
		<p><b>Resumen: </b>{{$pelicula['synopsis']}}</p>
		@if( $pelicula['rented']== true )
    		<p><b>Estado: </b>Pelicula alquilada</p>
			<button type="button" class="btn btn-success">Alquilar</button>
			<a  class="btn btn-warning" href="{{ url('/catalog/edit/' . $id )}}"><i class="fas fa-pencil-alt"></i>Editar Pelicula</a>
			<button type="button" class="btn btn-default"><i class="fas fa-angle-left"></i>Volver al listado</button>
		@elseif( $pelicula['rented']== false )
    		<p><b>Estado: </b>Pelicula disponible</p>
			<button type="button" class="btn btn-danger">Devolver Pelicula</button>
			<a  class="btn btn-warning" href="{{ url('/catalog/edit/' . $id )}}"><i class="fas fa-pencil-alt"></i>Editar Pelicula</a>
			<button type="button" class="btn btn-default"><i class="fas fa-angle-left"></i>Volver al listado</button>
		@endif
		
		

    </div>
</div>


@stop
