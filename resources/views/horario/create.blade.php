@extends('layouts.app')

@section('content')
@include('homeadmin.admin')

<style type="text/css">

body {
	text-align: center;
	font-family: sans-serif;
	margin: 0;
}

.modal {
	width: 100%;
	height: 100vh;
	background: rgba(0,0,0,0.8);
	
	position: absolute;
	top: 0;
	left: 0;
	
	display: flex;
	
	animation: modal 1s forwards;
	visibility: hidden;
	opacity: 0;
}

.contenido {
	margin: auto;
	width: 40%;
	height: 20%;
	background: white;
	border-radius: 10px;
}

#cerrar {
	display: none;
}

#cerrar + label {
	position: fixed;
	color: #fff;
	font-size: 25px;
	z-index: 50;
	background: darkred;
	height: 40px;
	width: 40px;
	line-height: 40px;
	border-radius: 50%;
	right: 150px;
	top: 150px;
	cursor: pointer;
	
	animation: modal 1s forwards;
	visibility: hidden;
	opacity: 0;
}

#cerrar:checked + label, #cerrar:checked ~ .modal {
	display: none;
}

@keyframes modal {
	100% {
		visibility: visible;
		opacity: 1;
	}
}

}
</style>


<input type="checkbox" id="cerrar">
        <div class="modal">       
			<div class="contenido">
				<h2 style="color:black">!!!Ahora registre el Horario </h2>
                    <label for="cerrar" id="btn-cerrar" style="color:red; font-weight:bold; font-size:50px;cursor: pointer;">OK</label>

			</div>
		</div>



<main>
 
		
	


<div class="container">


<div class="bg-primary text-center color-white mb-5">
    <label class="h3">Datos Personal</label>    
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
   
   <form method="POST" action="/horario">
            @csrf
                          
                        <div class="row">
                            <div class="col-md-5 p-4">
                                <div style="background-color:#73a2a2" class="p-4" >
                                    
                                    <div class="mb-5"> 
                                        <label>Dia</label>
                                        <select name="select" class="form-control col-md-6" id="dia" name="dia">
                                            <option value="Lunes" >Lunes</option> 
                                            <option value="Martes" >Martes</option> 
                                            <option value="Miercoles" >Miercoles</option>
                                            <option value="Jueves" >Jueves</option> 
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado" >Sabado</option>
                                            <option value="Domingo" >Domingo</option>
                                        </select>
                                    </div>
                                        
                                    <div class="col-md-12">
                                        <div class="row ">
                                            <label>INICIO </label>
                                            
                                                <input class="form-control" type="time" id="hinicio" name="hinicio">
                                            
                                        </div>
                                        <div class="row mt-4">
                                            <label>FIN</label>
                                            
                                                <input class="form-control" type="time" id="hfin" name="hfin">
                                            
                                        </div>
                                    </div>

                                </div>

                                <div>
                                     <a style="color:white" onclick="guardar()" id="btn_guardar" class="btn btn-info btn-block mt-4" >Agregar a Horario </a>
                                </div>

                            </div>
                            


                            <div class="col-md-7 p-4">
                                <table class="table table-bordered" id="tabla" style="color:white">
                                    <thead>
                                        <tr>
                                            <td>Id Trabajador</td>
                                            <td>Dia</td>
                                            <td>Hora inicio</td>
                                            <td>Hora Fin</td>
                                        </tr>
                                    </thead>
                                    <tbody id="tablita">
                                        <tr>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>

                        </div>
                        
                        <div style="text-align:right">
                            <button class="btn btn-primary" type="submit">Guardar Datos</button>
                        </div>
</form>
        

  </div>

  </main>

  <script>

          var table = $('#tabla');

          var a=0;

          $('#agregar').click(function(){
        guardar();
    });

    function deleteRow(row){
      var d = row.parentNode.parentNode.rowIndex;
      document.getElementById('tabla').deleteRow(d);
   }
    
     function guardar(){

          var dia= document.getElementById("dia").value;
          var hinicio= document.getElementById("hinicio").value;
          var hfin = document.getElementById("hfin").value;

          a++;
        
        var fila='<tr>'+
        '<td><input class="form-control" type="text" name="horario['+a+'][trabajador_id]" value="'+{{$t}}+'" readonly></td>'+ 
        '<td><input class="form-control" type="text" name="horario['+a+'][dia]" value="'+ dia+'" readonly></td>'+ 
        '<td><input class="form-control" type="text" name="horario['+a+'][hinicio]" value="'+ hinicio+'" readonly></td>'+ 
        '<td><input class="form-control" type="text" name="horario['+a+'][hfin]" value="'+ hfin +'" readonly></td>'+ 
        '<td>  <input type="button" id ="deleteDep" value="Eliminar" onclick = "deleteRow(this)" </td>'+
        '</tr>';  

       //var fila="<tr><td>"+_dia+"</td><td>"+ _hinicio+"</td><td>"+_hfin+"</td></tr>";

       table.append(fila);
        }
    </script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

@endsection