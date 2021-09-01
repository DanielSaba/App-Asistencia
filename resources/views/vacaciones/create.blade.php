@extends('layouts.app')

@section('content')
@include('homeadmin.admin')

<div class="bg-primary text-center color-white mb-4">
    <label class="h3"> ASIGNAR VACACIONES</label>    
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
    <form action="/vacaciones" method="POST">
                @csrf
                    <div class="container">
                
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Trabajador</label>
                                    <select  name="codigo" class="form-control" id="select-backed-zelect">
                                        @foreach($trab as $t)
                                            <option value="{{$t->id}}">
                                            {{$t->apellidos}} {{$t->nombres}}
                                            </option>
                                        @endforeach
                                    </select>

                                    

                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Fecha inicio Vacaciones</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="date" name="finicio" value="{{ old('finicio') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Fecha Fin Vacaciones</label>
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

<script>
    $('#select-backed-zelect').zelect()
</script>

@endsection
