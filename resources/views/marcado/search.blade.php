<form>
    <div class="form-group">
        <div class="input-group">
            <input  value="{{ old('searchText') }}"  type="search"  class="form-control" name="searchText"  placeholder="Ingrese codigo de Trabajador"  >
           
            <span class="pl-4">
                <button  class="btn btn-primary" type="submit">Buscar</button>
            </span>
        </div>
        <div class="mt-4">
            <lavel>Del...</lavel><input type="date"  name="dateinicio">
            <lavel class="ml-4">Al...</lavel><input type="date" name="datefin">
        </div>
    </div>
</form>