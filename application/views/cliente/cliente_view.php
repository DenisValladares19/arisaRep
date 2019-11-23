<script src="<?php echo base_url("resources/src/js/cliente/cliente.js")?>"></script>

<div class="row">

    <div class="col-md-12">
        <h1>Gestión de Clientes</h1>
    </div>

    <div class="col-md-1">
        <div class="btn btn-primary" id="agregarCliente">Agregar</div>
    </div>


</div>

<div class="table-responsive">

    <table class="table table-bordered" width="100%" cellspacing="0" id="data">
        <thead style="font-weight: bold;">
            <td>Nombre</td>
            <td>Empresa</td>
            <td>Telefono</td>
            <td>Celular</td>
            <td>Correo</td>
            <td>Dirección</td>
            <td>Registro Fiscal</td>
            <td>Opciones</td>
        </thead>

        <tbody>
            <tr>
                <td>Juan Carlos Estrada Portillo</td>
                <td>Fepade</td>
                <td>7732-9443</td>
                <td>2223-9128</td>
                <td>juan.carlos@gmail.com</td>
                <td>Antiguo Cuscatlan</td>
                <td>Pendiente</td>
                <td><button class="btn-success">Modificar</button></td>
            </tr>
            <tr>
                <td>Rocío Alejandra Chicas Fortis</td>
                <td>ITCA</td>
                <td>2223-9128</td>
                <td>7732-9443</td>
                <td>rocio.chicas@gmail.com</td>
                <td>Antiguo Cuscatlan</td>
                <td>Pendiente</td>
                <td><button class="btn-success">Modificar</button></td>
            </tr>
        </tbody>

        <tfoot>
        <th>Nombre</th>
        <th>Empresa</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Correo</th>
        <th>Dirección</th>
        <th>Registro Fiscal</th>
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
                            <label>Nombre de Cliente</label>
                            <input type="text" name="nombre" id="nombres" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Empresa perteneciente</label>
                            <input type="text" name="apellido" id="apellidos" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Teléfono Oficina</label>
                            <input type="text" name="direccion" id="direccionI" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Teléfono Celular</label>
                            <input type="text" name="email" id="emailI" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" name="email" id="emailI" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Dirección</label>
                            <input type="text" name="email" id="emailI" class="form-control"></input>
                        </div>
                    </div>

                    <div class="form-column col-md-12">



                        <div class="form-group">
                            <label>Registro Fiscal</label>
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

