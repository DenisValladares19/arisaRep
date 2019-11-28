<script src="<?php echo base_url("resources/src/js/cotizacion/cotizacion.js")?>"></script>

<div class="row">

    <div class="col-md-12">
        <h1>Gestión de Cotizaciones</h1>
    </div>

    <div class="col-md-1">
        <div class="btn btn-primary" id="agregarCliente">Agregar</div>
    </div>


</div>

<div class="table-responsive">

    <table class="table table-bordered" width="100%" cellspacing="0" id="data">
        <thead style="font-weight: bold;">
        <td>Cliente</td>
        <td>Tipo de Impresión</td>
        <td>Fecha</td>
        <td>Cantidad</td>
        <td>Precio</td>
        <td>Descripción</td>
        <td>Opciones</td>
        </thead>

        <tbody>
            <tr>
                <td>Juan Carlos</td>
                <td>Pendiente</td>
                <td>10/10/2019</td>
                <td>30</td>
                <td>$45.00</td>
                <td>Pendiente</td>
                <td><button class="btn-success">Modificar</button>
                    <button class="btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>Rocío Chicas</td>
                <td>Pendiente</td>
                <td>11/11/2019</td>
                <td>50</td>
                <td>$70.00</td>
                <td>Pendiente</td>
                <td><button class="btn-success">Modificar</button>
                    <button class="btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>Francisco Edgardo</td>
                <td>Pendiente</td>
                <td>01/01/2019</td>
                <td>40</td>
                <td>$60.00</td>
                <td>Pendiente</td>
                <td><button class="btn-success">Modificar</button>
                    <button class="btn-danger">Eliminar</button></td>
            </tr>
        </tbody>

        <tfoot>
        <td>Cliente</td>
        <td>Tipo de Impresión</td>
        <td>Fecha</td>
        <td>Cantidad</td>
        <td>Precio</td>
        <td>Descripción</td>
        <td>Opciones</td>
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
                <form action="cliente/saveCliente" method="post" id="fromModal">
                    <div class="row">
                    <div class="form-column col-md-6">
                       <div class="form-group">
                            <label>Nombre de Cliente</label>
                            <input type="text" name="nombre" id="nombres" class="form-control"></input>
                        </div>
                    
                        <div class="form-group">
                            <label>Tipo de Impresión</label>
                            <input type="text" name="apellido" id="apellidos" class="form-control"></input>
                        </div>
                    


                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="text" name="direccion" id="direccionI" class="form-control"></input>
                        </div>

                        <div class="form-group">
                            <label>Cantidad</label>
                            <input type="text" name="email" id="emailI" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-6">



                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" name="email" id="emailI" class="form-control"></input>
                        </div>
                   
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" name="email" id="emailI" class="form-control"></input>
                        </div>
                    
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="telefono" id="telefonoI" class="form-control"></input>
                        </div>
                    </div>
                    </div>
                    <button type="submit" name="btnSave" id="btnGuardar" class="btn btn-primary">Guardar Cotización</button>
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
                            <label>Dirección</label>
                            <input type="text" name="direccion" id="direccionE" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="emailE" class="form-control"></input>
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

