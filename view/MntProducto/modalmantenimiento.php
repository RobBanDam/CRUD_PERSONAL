<div id="modalmantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" id="producto_form">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>
                <div class="modal-body pd-25">
                    <input type="hidden" id="prodid" name="prodid">

                    <div class="form-group">
                        <label class="form-label" for="catid">Categoría</label>
                        <select class="form-control select2" name="catid" id="catid" data-placeholder="Seleccione" style="width: 100%">
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prodnom">Nombre</label>
                        <input type="text" class="form-control" name="prodnom" id="prodnom" placeholder="Ingrese Nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="proddesc">Descripción</label>
                        <textarea type="text" rows="3" class="form-control" id="proddesc" name="proddesc" placeholder="Ingrese Descripcion" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prodcant">Cantidad</label>
                        <input type="number" class="form-control" name="prodcant" id="prodcant" placeholder="Ingrese la cantidad" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>