<html>
<head>
    <title>Inventario</title>

    <script type="text/javascript">

       function mostrar() {
           document.getElementById("buscarInventario").style.display="block";
       }
       function ocultar() {
           document.getElementById("buscarInventario").style.display="none";
       }

       function mO() {
           var buscar = document.getElementById("buscarInventario");

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
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Inventario
    </h3>

</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a data-toggle="modal" data-target="#agregarInventario"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Inventario</a>
        </li>
        <li>
            <a class="active" href="#"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Inventario</a>
        </li>
        <li>
            <a  id="btnBuscar" onclick="mO()"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Inventario</a>
        </li>
        <li>
            <a data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-shopping-cart"></i>&nbsp; Lista de Compras</a>
        </li>
    </ul>
</div>


<div  class="col-md-6" style="float: right; display: none" id="buscarInventario">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="inputSearch">¿Qué Inventario estas buscando?</label>
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
        <th>Precio</th>
        <th>Stock</th>
        <th>Descrpcion</th>
        <th>Proveedor</th>
        <th>Acciones</th>
        </thead>
        <tfoot>
        <th>ID</th>
        <th>Nombres</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Descrpcion</th>
        <th>Proveedor</th>
        <th>Acciones</th>
        </tfoot>
        <tbody>
        <tr>
            <td>1</td>
            <td>Tinta</td>
            <td>12.5</td>
            <td>500</td>
            <td>Descripcion Breve...</td>
            <td>Arisa</td>
            <td>
                <a class="btn btn-outline-info" ><i class="fas fa-marker"></i></a>
                <a class="btn btn-outline-danger" ><i class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Tinta</td>
            <td>12.5</td>
            <td>500</td>
            <td>Descripcion Breve...</td>
            <td>Arisa</td>
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
<div class="modal fade" id="agregarInventario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Inventario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <h3 style="text-align: center;font-family: serif;"> Informacion de la Compra</h3>
                            <br>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <input type="date" name="fecha" class="form-control" required="true">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="cantidad" class="form-control" placeholder="Cantidad..." required="true">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <select name="poveedor" class="form-control">
                                        +<option>Seleccione el Proveedor...</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subtotal" class="form-control" placeholder="Subtotal..." required="true">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <input type="text" name="impuesto" placeholder="Impuesto..." class="form-control" required="true">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="descuento" placeholder="Descuento..." class="form-control" required="true">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <input type="text" name="total" placeholder="Total Pagó..." class="form-control" required="true">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <h3 style="text-align: center;font-family: serif;"> Informacion del Producto</h3>
                            <br>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre..." required="true">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <input type="text" name="precio" class="form-control" placeholder="Precio..." required="true">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="stock" class="form-control" placeholder="Stock..." required="true">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="textarea" name="descripcion" class="form-control" placeholder="Descripcion..." required="true">
                                </div>
                            </div>
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


<!-- modal Compras -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Compras Realizadas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row">
                        <table class="table table-bordered" id="tablaUser" width="100%">
                            <thead style="background-color: #85A1CD">
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Impuesto</th>
                            <th>Descuento</th>
                            <th>Total Pagó</th>
                            </thead>
                            <tfoot>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Impuesto</th>
                            <th>Descuento</th>
                            <th>Total Pagó</th>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>25/10/19</td>
                                <td>12</td>
                                <td>500.68</td>
                                <td>47.39</td>
                                <td>25.88</td>
                                <td> 400</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>25/10/19</td>
                                <td>12</td>
                                <td>500.68</td>
                                <td>47.39</td>
                                <td>25.88</td>
                                <td> 400</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

            </div>

            <div class="modal-footer">
                <p>Esta es la Lista de las Ultima Compras</p>
            </div>
        </div>
    </div>
</div>


</section>
</body>
</html>