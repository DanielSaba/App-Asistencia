@extends('layouts.app')

@section('content')
@include('homeadmin.admin')



<div class="bg-primary text-center color-white">
                        <label class="h3">Listado de Usuarios</label>    
</div>

<div class="container mt-5" >
    <table class="table table-bordered" style="color:white">
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Correo Electronico</td>
                <td>Opciones</td>
            </tr>
        </thead>
        @foreach($usuarios as $usu)
            <tbody>
               <td> {{$usu->id}} </td>
               <td> {{$usu->name}} </td>
               <td> {{$usu->email}} </td>
               <td>
               <a href="" data-target="#exampleModaldelete-{{$usu->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
               </td>
                              
            </tbody>
            @include('usuarios.delete')
        @endforeach
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>


</div>


@endsection