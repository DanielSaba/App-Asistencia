@extends('layouts.app')

@section('content')
@include('homeadmin.admin')

<div class="bg-primary text-center color-white">
        <label class="h3">Listado de trabajadores</label>    
</div>

<div class="container mt-5">
    <table class="table table-striped table-active" style="color:white">
        <thead class="thead-info">
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccion</th>
                <th>Dni</th>
                <th>Telefono</th>
                <th>Area</th>
                <th>Cargo</th>
                <th>Foto</th>
            </tr>
        </thead>
        @foreach($tra as $trab)
            <tbody>
               <td> {{$trab->id}} </td>
               <td> {{$trab->nombres}} </td>
               <td> {{$trab->apellidos}} </td>
               <td> {{$trab->direccion}} </td>
               <td> {{$trab->dni}} </td>
               <td> {{$trab->telefono}} </td>
               <td> {{$trab->area}} </td>
               <td> {{$trab->cargo}} </td>

               <td> 
               
                    <img src="images/{{$trab->image}}" height="100px" width="100px" class="img-thumbnail" >
                </td>
               
               <td>
               <a href="" data-target="#exampleModaledit-{{$trab->id}}" data-toggle="modal"><button class="btn btn-success">Editar</button></a>
               <a href="" data-target="#exampleModaldelete-{{$trab->id}}" data-toggle="modal"><button class="btn btn-danger">X</button></a>
               </td>
               
            </tbody>
            @include('trabajador.edit')
            @include('trabajador.delete')
        @endforeach
    </table>

    
{{ $lista->links() }}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>


</div>

@endsection