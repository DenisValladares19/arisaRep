<html>
<head>
    <title>Inventario</title>

    <script type="text/javascript">

        function mostrar() {
            document.getElementById("buscarProveedor").style.display="block";
        }
        function ocultar() {
            document.getElementById("buscarProveedor").style.display="none";
        }

        function mO() {
            var buscar = document.getElementById("buscarProveedor");

            if (buscar.style.display == "none") {
                mostrar();
            }
            else {
                ocultar();
            }
        }


    </script>
</head>
<body>
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Proveedores
    </h3>

</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a data-toggle="modal" data-target="#agregarProveedor"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Proveedor</a>
        </li>
        <li>
            <a class="active" href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Proveedores</a>
        </li>
        <li>
            <a  id="btnBuscar" onclick="mO()"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Proveedor</a>
        </li>
    </ul>
</div>


<div  class="col-md-6" style="float: right; display: none" id="buscarProveedor">
    <div class="row justify-content-md-center">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="inputSearch">¿Qué Proveedor estas buscando?</label>
                <input type="text" class="form-control" name="busqueda-" id="inputSearch" maxlength="50">
            </div>
        </div>
    </div>
</div>

<!-- Content here-->
<div class="container-fluid">
    <table class="table table-bordered" id="tablaUser" width="100%">
        <thead style="background-color: #85A1CD">
        <th>ID</th>
        <th>Nombres</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Acciones</th>
        </thead>
        <tfoot>
        <th>ID</th>
        <th>Nombres</th>
        <th>Telefono</th>
        <th>Celular</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Acciones</th>
        </tfoot>
        <tbody>
        <tr>
            <td>1</td>
            <td>Francisco</td>
            <td>+(503) 2322 0102</td>
            <td>+(503) 7279 1477</td>
            <td>Jayaque</td>
            <td>edgard@mail.com</td>
            <td>
                <a class="btn btn-outline-info" ><i class="fas fa-marker"></i></a>
                <a class="btn btn-outline-danger" ><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Edgardo</td>
            <td>+(503) 2322 0102</td>
            <td>+(503) 7279 1477</td>
            <td>Jayaque</td>
            <td>edgard@mail.com</td>
            <td>
                <a class="btn btn-outline-info" ><i class="fas fa-marker"></i></a>
                <a class="btn btn-outline-danger" ><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>
</div>


<!-- modal Insertar -->

<!-- Modal -->
<div class="modal fade" id="agregarProveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" name="nombre" placeholder="Nombre..." class="form-control" required="true">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="telefono" class="form-control" placeholder="Telefono..." required="true">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" name="email" placeholder="E-mail" class="form-control" required="true">
                        </div>
                        <div class="col-md-6">
                            <input type="tel" name="celular" class="form-control" placeholder="Celular..." required="true">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <input type="textar" name="direccion" placeholder="Direccion..." class="form-control" required="true">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>




</section>
</body>
</html>