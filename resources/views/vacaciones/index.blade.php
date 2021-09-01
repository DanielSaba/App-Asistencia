@extends('layouts.app')

@section('content')
@include('homeadmin.admin')



<div class="bg-primary text-center color-white">
                        <label class="h3">Listado de Vacaciones Asignadas</label>    
</div>

<div class="container mt-5" >
    <table class="table table-bordered" style="color:white">
        <thead>
            <tr>
                <td>Apellidos</td>
                <td>Nombres</td>
                <td>Fecha Inicio Vacaciones</td>
                <td>Fecha Fin Vacaciones</td>
            </tr>
        </thead>
        @foreach($vac as $item)
            <tbody>
               
               <td> {{$item->apellidos}} </td> 
               <td> {{$item->nombres}} </td> 
               <td> {{$item->finicio}} </td> 
               <td> {{$item->ffin}} </td>     
                                  
            </tbody>
        @endforeach
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>


</div>


@endsection