<script src="<?php echo base_url("resources/src/js/muestra/muestra.js")?>"></script>

<div class="row">

    <div class="col-md-12">
        <h1>Gestión de Muestras</h1>
    </div>

    <div class="col-md-1">
        <div class="btn btn-primary" id="agregarCliente">Agregar</div>
    </div>


</div>

<div class="table-responsive">

    <table class="table table-bordered" width="100%" cellspacing="0" id="data">
        <thead style="font-weight: bold;">
        <td>Estado</td>
        <td>URL</td>
        <td>Comentarios</td>
        <td>Opciones</td>
        </thead>

        <tbody>
            <tr>
                <td>Aprobado</td>
                <td>Pendiente</td>
                <td>URL Pendiente</td>
                <td><button class="btn-success">Modificar</button></td>
            </tr>
            <tr>
                <td>Reprobado</td>
                <td>N/A</td>
                <td>N/A</td>
                <td><button class="btn-success">Modificar</button></td>
            </tr>
            <tr>
                <td>Aprobado</td>
                <td>Pendiente</td>
                <td>URL Pendiente</td>
                <td><button class="btn-success">Modificar</button></td>
            </tr>
        </tbody>

        <tfoot>
        <th>Estado</th>
        <th>URL</th>
        <th>Comentarios</th>
        <th>Opciones</th>

        </tfoot>

    </table>

</div>



<!-- Modal -->
<div class="modal fade" id="frmInsertarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Insertar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="cliente/saveCliente" method="post">

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="nombre" id="nombres" class="form-control"></input>
                        </div>
                    </div>


                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>URL de Archivo</label>
                            <input type="text" name="direccion" id="direccionI" class="form-control"></input>
                        </div>
                    </div>



                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Comentarios</label>
                            <input type="text" name="telefono" id="telefonoI" class="form-control"></input>
                        </div>
                    </div>
                    <button type="submit" name="btnSave" class="btn btn-primary">Guardar Cliente</button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal editar -->
<div class="modal fade" id="frmEditarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="cliente/updateCliente" method="post">

                    <div class="form-column col-md-12">

                        <input type="hidden" name="idCliente" id="idCliente" class="form-control"></input>

                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" id="nombresE" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" name="apellido" id="apellidosE" class="form-control"></input>
                        </div>
                    </div>



                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Teléfono</label>
                            <input type="text" name="telefono" id="telefonoE" class="form-control"></input>
                        </div>
                    </div>
                    <button type="submit" name="btnEditar" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>

        </div>
    </div>
</div>

