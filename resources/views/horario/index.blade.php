@extends('layouts.app')

@section('content')
@include('homeadmin.admin')

<div class="bg-primary text-center color-white">
        <label class="h3">Horarios</label>    
</div>

<div class="container" style="margin-top:70px">
    @include('horario.search')
</div>

    <div class="container mt-2">
        <div class="mt-5">
            <div class="row">
                        <table class="table col-md-6 " style="color:white">
                            <thead class="thead-info">
                                <tr>
                                    <th>Dia</th>
                                    <th>Hora Inicio</th>
                                    <th>Hora Fin</th>
                                </tr>
                            </thead>
                            @foreach($horario as $ho)
                                <tbody >
                                <tr >
                                    <td> {{$ho->dia}} </td> 
                                    <td> {{$ho->hinicio}} </td> 
                                    <td> {{$ho->hfin}} </td> 
                                </tr>
                                </tbody>
                            @endforeach
                            
                        </table>
            </div>
        </div>
    </div> 
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




@endsection