@extends('layouts.app')

@section('content')



<div class="text-center">
    
<div style="font-size:50px" id="reloj2"></div>

</div>

<div class="container mt-4">

    <form action="/marcado" method="POST">
    @csrf
        <div class="text-center">
            <label class="h4">Ingrese Codigo </label>
        </div>
        <div class="form-group row justify-content-center">
                <div class="col-6">
                    <input style="font-size:20px; font-weight:bold; text-align:center" class="form-control" name="trabajador_id" type="number">
                </div>
        </div>

        <div> <input type="hidden" value="{{$mihora}}" name="hora"> <input type="hidden" value="{{$mifecha}}" name="fecha"></div></div>
        <div>
			 <button class="boton" type="submit"> MARCAR </button>	
            
	    </div>
    </form>

        @if(session('success'))
            <div class="alert alert-success text-center h3" >
                {{session('success')}}
            </div>
        @endif
        @if(session('nosuccess'))
            <div class="alert alert-danger text-center h3" >
                {{session('nosuccess')}}
            </div>
        @endif

    <div>

    <style type="text/css">
            .boton{
        background: #00b7f8;
        border-bottom: 5px solid #0045a6;
        border-radius: 12px;
        box-shadow: 6px 6px 6px #999;
        color: #fff;
        cursor: pointer;
        display: block;  
        font-family: 'Raleway', Arial, Helvetica;
        font-size: 50px;
        height: 100px;
        margin: 80px auto;
        padding: 20px 20px;
        text-align: center;
        transition: all 0.2s ease 0s;
        width: 250px;
        }
        .boton:hover{
            background: #0096f7;
        }
        .boton:active {
            box-shadow: 2px 2px 2px #777, 0px 0px 35px 0px #00b7f8;
            border-bottom:1px solid #0045A6;
        text-shadow:  0px 0px 5px #fff, 0px 0px 5px #fff;
            transform: translateY(4px);
        transition: all 0.1s ease 0s;
        margin: 80px auto 76px auto;
        }

    
    </style>

   

  
            
    </div>

</div>


<script>

function muestraReloj() {
  var fechaHora = new Date();
  var horas = fechaHora.getHours();
  var minutos = fechaHora.getMinutes();
  var segundos = fechaHora.getSeconds();

  if(horas < 10) { horas = '0' + horas; }
  if(minutos < 10) { minutos = '0' + minutos; }
  if(segundos < 10) { segundos = '0' + segundos; }

  document.getElementById("reloj2").innerHTML = horas+':'+minutos+':'+segundos;
}

window.onload = function() {
  setInterval(muestraReloj, 1000);
}

setTimeout(muestraReloj, 1000);



</script>

@endsection