@extends('layouts.app')

@section('content')
@include('homeadmin.admin')

<div class="bg-primary text-center color-white mb-4">
    <label class="h3"> Registrar Detalle Trabajador</label>    
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
    <form action="/detalletrabajador" method="POST">
                @csrf
                    <div class="container">
                
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Remuneracion por jornada</label>
                                    <div class="col-md-6">
                                    <input class="form-control" step="0.01" type="number" name="remu" value="{{ old('remu') }}" placeholder="S/"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input  class="form-control" type="hidden" name="codigo" id="nombres" value="{{$t}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Fecha inicio</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" name="finicio" value="{{ old('finicio') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Fecha Fin</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" name="ffin" value="{{ old('ffin') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>                   
                    </div>

                        

    </form>
</div>

@endsection
