<div class="modal fade modal-slide-in-right" id="exampleModaledit-{{$trab->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form class="form-group" method="POST" action="trabajador/{{$trab->id}}">
        @csrf
    	@method('PUT')
        <div class="modal-dialog w-100%" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h4 class="text-primary">Editar</h4>
                </div>
                <div class="content m-4 " id="miclase">
					<div class="form-group row">
					    <label class="col-sm-2 col-form-label">Nombres</label>
						    <div class="col-sm-10">
						      <input type="text" value="{{$trab->nombres}}" class="form-control"  name="nombres">
						    </div>
				    </div>
				    <div class="form-group row">
					    <label  class="col-sm-2 col-form-label">Apellidos</label>
						    <div class="col-sm-10">
						      <input type="text" value="{{$trab->apellidos}}" class="form-control"  name="apellidos">
						    </div>
				    </div>
				    <div class="form-group row">
					    <label  class="col-sm-2 col-form-label">Direccion</label>
						    <div class="col-sm-10">
						      <input type="text" value="{{$trab->direccion}}" class="form-control"  name="direccion">
						    </div>
				    </div>
                    <div class="form-group row">
					    <label  class="col-sm-2 col-form-label">DNI</label>
						    <div class="col-sm-10">
						      <input type="number" value="{{$trab->dni}}" class="form-control"  name="dni">
						    </div>
				    </div>
                    <div class="form-group row">
					    <label  class="col-sm-2 col-form-label">Telefono</label>
						    <div class="col-sm-10">
						      <input type="number" value="{{$trab->telefono}}" class="form-control"  name="telefono">
						    </div>
				    </div>
                    <div class="form-group row">
					    <label  class="col-sm-2 col-form-label">F Nacimiento</label>
						    <div class="col-sm-10">
						      <input type="date" value="{{$trab->fnacimiento}}" class="form-control"  name="fnacimiento">
						    </div>
				    </div>
                    <div class="form-group row">
					    <label  class="col-sm-2 col-form-label">Area</label>
						    <div class="col-sm-10">
						      <input type="text" value="{{$trab->area}}" class="form-control"  name="area">
						    </div>
				    </div>
                    <div class="form-group row">
					    <label  class="col-sm-2 col-form-label">Cargo</label>
						    <div class="col-sm-10">
						      <input type="text" value="{{$trab->cargo}}" class="form-control"  name="cargo">
						    </div>
				    </div>
					<div class="form-group row">
						<button type="submit" class="btn btn-success">Editar</button>
					</div>
				</div>
				<div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            	</div>
 			</div>
            
         </div>
    </form>
</div>


<style type="text/css">
    #miclase label{
        color:black;
    }


</style>