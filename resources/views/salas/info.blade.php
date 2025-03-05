<!-- Modal edit -->
<div class="modal fade" id="edit{{ $sala->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar usuario agenda</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('agendas.update', $sala->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id=""
                            aria-describedby="helpId" value="{{$sala->nombre}}" />
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    
                    <div class="mb-3">
                        <label for="capacidad" class="form-label">Capacidad</label>
                        <input type="int" class="form-control" name="capacidad" id=""
                            aria-describedby="helpId" value="{{$sala->capacidad}}"/>
                        <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>
                    <div class="mb-3">
                        <label for="proyector" class="form-label">Proyector</label>
                        <select class="form-control" name="proyector" id="proyector">
                            <option value="1" {{ $sala->proyector ? 'selected' : '' }}>Sí</option>
                            <option value="0" {{ !$sala->proyector ? 'selected' : '' }}>No</option>
                        </select>
                        <small id="helpId" class="form-text text-muted">Selecciona si la sala tiene o no tiene proyector.</small>
                    </div>
                    
                    



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
    </form>
</div>
<!-- Modal delete -->
<div class="modal fade" id="delete{{ $sala->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar de agenda</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('salas.destroy', $sala->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <h3>¿Estás seguro de eliminar {{ $sala->nombre }}</h3>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
    </form>
</div>
