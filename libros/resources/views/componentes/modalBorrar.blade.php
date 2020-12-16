<div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Seguro que desea borrar <span id="nombreElemento"></span> ?</h5>
            <p id="variable"></p>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Este cambio no se podr&aacute; revertir.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="borrarCategoria()" >SI</button>
        </div>
        </div>
    </div>
</div>