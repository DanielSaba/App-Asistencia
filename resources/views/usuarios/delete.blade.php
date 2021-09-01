<div class="modal fade modal-slide-in-right" id="exampleModaldelete-{{$usu->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form class="form-group" method="POST" action="usuarios/{{$usu->id}}">
        @csrf
    	@method('DELETE')
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="m-4">
                    <div class="modal-header">
                        <lavel style="color:black">¿Desea eliminar?</lavel>
                    </div>
                    <div class="d-flex bd-highlight mb-3">
                        <button class="btn btn-warning ml-auto p-2 bd-highlight btn btn-primary mt-2">Aceptar</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </form>
</div>
