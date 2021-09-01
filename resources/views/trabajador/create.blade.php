@extends('layouts.app')


@section('content')
@include('homeadmin.admin')


<style type="text/css">
    #exTab2 li{
        font-size:20px;
        width:50%;
        font-weight:bold;
        text-align:center;
    }
</style>
    <div class="bg-primary text-center color-white">
            <label class="h3">Registrar Trabajador</label>    
    </div>
    @if(count($errors) > 0)
    <div class="errors">
        <ul>
        @foreach($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
<div class="container pt-4">
            <form action="/trabajador" method="POST" enctype="multipart/form-data" >
            @csrf
                <div class="container">
               
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group row">
                                    <label>Nombres</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="nombres" id="nombres" value="{{ old('nombres') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                    <label>Fecha de Nacimiento</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="date" name="fnacimiento" value="{{ old('fnacimiento') }}"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group row">
                                    <label>Apellidos</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="apellidos" value="{{ old('apellidos') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label>Area</label>
                                <select class="form-control" name="area">
                                    <option>Planeamiento y Presupuesto</option>
                                    <option>Asesoria Juridica</option>
                                    <option>Administracion</option>
                                    <option>Estadistica e Informatica</option>
                                    <option>Competitividad Agraria</option>
                                    <option>Gestion Forestal</option>
                                    <option>Tierras y catastro rural</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group row">
                                    <label>Direccion</label>
                                <div class="col-md-6">
                                    <input class="form-control" name="direccion" value="{{ old('direccion') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                    <label>Cargo</label>
                                        <select class="form-control" name="cargo">
                                            <option>Director</option>
                                            <option>Secretaria</option>
                                            <option>Planificador</option>
                                            <option>Abogado</option>
                                            <option>Contador</option>
                                            <option>Esp. Administrativo</option>
                                            <option>Esp. Estadistica e informatica</option>
                                            <option>Ing. Ciencias Agrarias</option>
                                            <option>Tec. Promocion Agraria</option>
                                            <option>Practicante</option>
                                        </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="" style="margin-right:40px">DNI</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="number" name="dni" value="{{ old('dni') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cargar fotografia</label>
                                <div class="col-md-6">
                                    <input class="form-control-image" type="file" name="image"> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group row">
                                    <label>Telefono</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="number" name="telefono" value="{{ old('telefono') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="text-align:right">
                        <button class="btn btn-primary" type="submit">Guardar datos</button>
                    </div>
                </div>
            </form>
</div>


@endsection


