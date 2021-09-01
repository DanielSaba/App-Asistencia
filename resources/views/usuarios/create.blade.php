@extends('layouts.app')


@section('content')
@include('homeadmin.admin')

<div class="bg-primary text-center color-white mb-4">
    <label class="h3"> Registrar Usuario</label>    
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
    <form action="/usuarios" method="POST">
                @csrf
                    <div class="container">
                
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Nombre</label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="nombre" id="nombres" value="{{ old('nombre') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Email</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="email" name="email" value="{{ old('email') }}"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group row">
                                        <label>Password</label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="password" name="password" value="{{ old('password') }}">
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
