$(document).ready(function () {
    llenarTablaInventario();
    
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);
        $(function () {
        $("#fechaI").datepicker();
    });
    
    $(document).on("click", "#agregarCliente", function () {
        $("#frmInsertarCliente").modal("show");
    });
    
    
    $("#btnGuardar").click(function(e){
       e.preventDefault();
        console.log($("#fechaI").val());
    });
    
    //$("#clienteI").select2();
    //Tabla Cotizacion
    $('#data').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    
    //Tabla Inventario
    $('#tablaI').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        }
    });
    
    $("#material").click(function(e){
       e.preventDefault();
       $("#modalInventario").modal("show");
    });
    
    llenarEstado();
    llenarCLientes();
    llenarTipo();
    
});


function llenarEstado(){
    $.post("cotizacion/getAllEstados",{},function(res){
        var r = JSON.parse(res);   
        for(var i = 0;i<r.length;i++){
            $("#estadoI").append("<option value='"+r[i].idEstado1+"'>"+r[i].nombre+"</option>");
        }       
    });
}

function llenarCLientes(){
    $.post("cotizacion/getAllCliente",{},function(res){
        var r = JSON.parse(res);   
        for(var i = 0;i<r.length;i++){
            $("#clienteI").append("<option value='"+r[i].idCliente+"'>"+r[i].nombre+" "+r[i].apellido+"</option>");
        }       
    });
}

function llenarTipo(){
    $.post("cotizacion/getAllTipo",{},function(res){
        var r = JSON.parse(res);   
        for(var i = 0;i<r.length;i++){
            $("#tipoI").append("<option value='"+r[i].idTipoImpresion+"'>"+r[i].nombre+" </option>");
        }       
    });
}

function llenarTablaInventario(){
    $.post("cotizacion/getAllInventario",{},function(res){
        var r = JSON.parse(res);   
        var tabla = "<table width='100%' id='tablaI'><thead><th>Nombre</th><th>Stock</th><th>Precio</th><th>Descripción</th><th>Acción</th></thead><tbody>"
        for(var i = 0;i<r.length;i++){
            tabla += "<tr><td>"+r[i].nombre+"</td><td>"+
                    r[i].stock+"</td><td>"+
                    r[i].precio+"</td><td>"+r[i].descripcion+"</td><td><a class='btn btn-success btn-block agregar' id='"+r[i].idInventario+"'>Agregar</a></td>";
                
        } 
        tabla += "</tbpdy><tfoot><th>Nombre</th><th>Stock</th><th>Precio</th><th>Descripción</th><th>Acción</th></tfoot>";
        $("#mostarTabla").append(tabla);
    });
}