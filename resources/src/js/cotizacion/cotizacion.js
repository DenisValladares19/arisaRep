$(document).ready(function () {

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
    
    
    $(".agregar").click(function(e){
       e.preventDefault();
       let id = $(this).attr("id");
       let cant = $(this).parents("tr").find("input").val();
       $.post("cotizacion/newMaterial",
       {id}, 
       function(res){
           let r = JSON.parse(res);
           if(localStorage.getItem("material")===null){
               //Cuando localStorage esta vacio y es el primer registro del arreglo
               var material = [{
                   "idMaterial":r[0].idInventario,
                   "nombre": r[0].nombre,
                   "precio": r[0].precio,
                   "stock": r[0].stock,
                   "desc": r[0].descripcion,
                   "cantidad": cant
               }];
               localStorage.setItem("material",JSON.stringify(material));
               //alerta
               const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })

                  Toast.fire({
                    icon: 'success',
                    title: 'Material Agregado exitosamente'
                  });
                  //final alerta
           }else{
            let sesMaterial = JSON.parse(localStorage.getItem("material"));
            let band = null;
            var n1 = null;
            
            sesMaterial.forEach((m, key)=>{
                if(r[0].idInventario === m.idMaterial){
                    band = true;
                    n1= key;
                }else{
                   band = false;
                   n1 = null;
               }
            });   
             
             if(band){
                 alert(sesMaterial[n1].idMaterial);
                    let canti = parseInt(sesMaterial[n1].cantidad);
                    canti+=parseInt(cant);
                    sesMaterial[n1].cantidad = canti;
                    localStorage.setItem("material",JSON.stringify(sesMaterial));
                    //alerta
               const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })

                  Toast.fire({
                    icon: 'success',
                    title: 'Agregaste '+cant+' más exitosamente'
                  });
                  //final alerta
             }else{
                 var material2 = [{
                    "idMaterial":r[0].idInventario,
                    "nombre": r[0].nombre,
                    "precio": r[0].precio,
                    "stock": r[0].stock,
                    "desc": r[0].descripcion,
                    "cantidad": cant
                  }];
                var n = sesMaterial.concat(material2);
                localStorage.setItem("material",JSON.stringify(n));
                //alerta
               const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })

                  Toast.fire({
                    icon: 'success',
                    title: 'Agregaste otro material más exitosamente'
                  });
                  //final alerta
               }
             }
         
       });
       
       $(".cant").val(1);
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
    
    
    $("#material").click(function(e){
       e.preventDefault();
       $("#modalInventario").modal("show");
    });
    
    llenarEstado();
    llenarCLientes();
    llenarTipo();
    
    //Tabla Inventario
    $('#invent').DataTable({
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
            "infoFiltered": "(Filtrado de  _MAX_  total entradas)",
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
