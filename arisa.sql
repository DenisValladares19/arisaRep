create database arisa;
use arisa;

create table rol(
idRol int primary key auto_increment,
nombre varchar(50),
borradoLogico int
);

create table usuario(
idUser int primary key auto_increment,
nombre varchar(50),
correo varchar(50),
pass varchar(50),
idRol int,
borradoLogico int,
foreign key(idRol) references rol(idRol)
);

create table proveedor(
idProveedor int primary key auto_increment,
nombre varchar(50),
empresa varchar(50),
telefono varchar(50),
nit  varchar(50),
dui varchar(50),
registroFiscal int,
celular varchar(50),
correo varchar(50),
direccion varchar(50),
borradoLogico int 
);

create table compras(
idCompras int primary key auto_increment,
fecha date,
cantidad int,
subtotal double,
impuesto double,
descuento double,
total double,
idProveedor int,
borradoLogico int,
foreign key(idProveedor) references proveedor(idProveedor)
);

create table inventario(
idInventario int primary key auto_increment,
nombre varchar(50),
precio double,
stock int,
descripcion varchar(50),
idCompra int,
borradoLogico int,
foreign key(idCompra) references compras(idCompras)
);

create table estado2(
idEstado2 int primary key auto_increment,
nombre varchar(50),
borradoLogico int
);

create table estado1(
idEstado1 int primary key auto_increment,
nombre varchar(50),
borradoLogico int
);

create table muestra(
idMuestra int primary key auto_increment,
url varchar(50),
comentarios varchar(100),
borradoLogico int
);

create table tipoImpresion(
idTipoImpresion int primary key auto_increment,
nombre varchar(50),
borradoLogico int
);

create table cliente(
idCliente int primary key auto_increment,
nombre varchar(50),
apellido varchar(50),
empresa varchar(50),
telefono varchar(50),
celular varchar(50),
correo varchar(50),
dui varchar(50),
nit varchar(50),
direccion varchar(50),
registroFiscal float,
borradoLogico int
);

create table cotizacion(
idCotizacion int primary key auto_increment,
idCliente int null,
idEstado1 int,
idTipoImpresion int,
fecha date,
cantidad int,
precio double,
descripcion varchar(50),
idEstado int,
borradoLogico int,
foreign key(idTipoImpresion) references tipoImpresion(idTipoImpresion),
foreign key(idEstado1) references estado1(idEstado1)
);


create table orden(
idOrden int primary key auto_increment,
idCotizacion int,
nombre varchar(50),
comentarios varchar(50),
tamaño varchar(50),
cArchivo varchar(100),
idMuestra int,
idEstado2 int,
borradoLogico int,
foreign key(idMuestra) references muestra(idMuestra),
foreign key(idCotizacion) references cotizacion(idCotizacion),
foreign key(idEstado2) references estado2(idEstado2)
);


create table detalleMaterial(
idDetalleMaterial int primary key auto_increment,
idInventario int,
idCotizacion int,
borradoLogico int,
foreign key(idInventario) references inventario(idInventario),
foreign key(idCotizacion) references cotizacion(idCotizacion)
);

create table factura(
idFactura int primary key auto_increment,
nombre varchar(50),
borradoLogico int
);

/* Esta tabla hace Referencia a Facturazion*/
create table venta(
idVenta int primary key auto_increment,
fecha date,
idCliente int null,
idFactura int,
idCotifacion int null,
subTotal double,
borradoLogico int,
foreign key(idCliente) references cliente(idCliente),
foreign key(idFactura) references factura(idFactura),
foreign key(idCotifacion) references cotizacion(idCotizacion)
);



