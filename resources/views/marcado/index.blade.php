@extends('layouts.app')

@section('content')
@include('homeadmin.admin')

<div class="bg-primary text-center color-white">
        <label class="h3">Reportes</label>    
</div>
<div class="container" style="margin-top:70px">
    @include('marcado.search')
</div>

    

<div class="container mt-2">
    
    <div class="mt-5">

        <di class="">
            @foreach($datosTrab  as $nombres)
                
                <label>Nombres:</label><label>{{$nombres->nombres}}</label>
                <label class="ml-5" >Apellidos:</label><label>{{$nombres->apellidos}}</label>
                <label class="ml-5">DNI:</label><label>{{$nombres->dni}}</label>
            @endforeach
        </div>

<div class="row">
            <table class="table col-md-6 " style="color:white">
                <thead class="thead-info">
                    <tr>
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Hora Entrada</th>
                    </tr>
                </thead>
                @foreach($marca as $mar)
                    <tbody >
                    <tr >
                        <td> {{$mar->trabajador_id}} </td> 
                        <td> {{$mar->fecha}} </td> 
                        <td> {{$mar->horaentrada}} </td> 
                    </tr>
                    </tbody>
                @endforeach
                
            </table>

            <table class="table col-md-6" style="color:white">
                <thead class="thead-info">
                    <tr>
                        <th>Hora salida</th>
                    </tr>
                </thead>
                @foreach($marca2 as $mar2)
                    <tbody >
                    <tr >
                    <td> {{$mar2->horasalida}}</td> 
                    </tr>
                    </tbody>
                    @endforeach
            </table>

</div>

        <div style="text-align:right">
            <button class="btn btn-info" type="button" onclick="javascript:window.print()">Imprimir</button>
        </div>

        </div>
        
  </div> 
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




@endsection