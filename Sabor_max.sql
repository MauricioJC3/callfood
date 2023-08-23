CREATE database Sabor_Max;
use Sabor_Max;

CREATE TABLE Empleados(
id_Empleado int PRIMARY KEY,
nom_emp varchar(15),
apell_emp varchar(20),
cargo_emp varchar(20),
tel_emp int,
direc_emp varchar(50),
correo_emp varchar(50),
fecha_registro_empleado datetime
);

CREATE TABLE Empresa (
id_Empresa INT PRIMARY KEY,
id_Empleado INT,
nombre_empresa varchar(50),
direccion_empresa varchar(70),
telefono_empresa varchar(13),
correo_empresa varchar(70),    
fecha_creacion_empresa datetime,
FOREIGN KEY (id_Empleado) REFERENCES Empleados (id_Empleado)
);

CREATE TABLE Cliente(
id_Cliente int PRIMARY KEY,
nombre_cli varchar(15),
apellido_cli varchar(20),
direccion_cli varchar(50),
telefono_cli int,
correo_cli varchar(50),
genero_cli varchar,
fecha_nacimiento_cli date,
fecha_registro datetime
);

CREATE TABLE Microempresa(
id_Microempresa int PRIMARY KEY,
id_Empresa int,
nom_mic varchar(30),
direc_mic varchar(50),
tel_mic int,
correo_mic varchar(80),
fecha_registro_micro datetime,
FOREIGN KEY (id_Empresa) REFERENCES Empresa (id_Empresa)
);

CREATE TABLE Repartidor(
id_Repartidor INT PRIMARY KEY,
nombre varchar(44),
apellidos varchar(44),
fecha_nac date,
correo varchar(50),
telefono int,
direccion varchar(70)
);

CREATE TABLE Productos(
id_Producto int PRIMARY KEY,
id_Microempresa INT,
nom_pro varchar(20),
precio_pro real,
descrip_pro varchar(80),
cantidad_producto varchar(5),
FOREIGN KEY (id_Microempresa) REFERENCES Microempresa(id_Microempresa)
);

CREATE TABLE Ventas(
id_Venta INT PRIMARY KEY,
id_DetalleVenta int,
fecha_compra datetime,
cantidad_venta int,
total_venta decimal
);

CREATE TABLE Pedidos (
id_Pedido INT PRIMARY KEY NOT NULL,
id_Cliente INT,
id_Venta INT,
id_Empleado int,
fecha_pedido DATETIME,
direccion_pedido VARCHAR(70),
descripcion_pedido varchar(90),
forma_de_pago VARCHAR(33),
valor_domicilio decimal,
codigo_pedido varchar(9),
FOREIGN KEY (id_Cliente) REFERENCES Cliente(id_Cliente),
FOREIGN KEY (id_Venta) REFERENCES Ventas(id_Venta),
FOREIGN KEY (id_Empleado) REFERENCES Empleados(id_Empleado)
);

CREATE TABLE DetalleVenta (
id_DetalleVenta INT PRIMARY KEY,
id_Venta INT,
id_Producto INT,
cantidad_prod VARCHAR(5),
total_venta decimal,
valor_comision decimal,
FOREIGN KEY (id_Venta) REFERENCES Ventas(id_Venta),
FOREIGN KEY (id_Producto) REFERENCES Productos(id_Producto)
);

use Sabor_Max;
CREATE TABLE Registrados (
id_usuario int PRIMARY KEY,
Nombre varchar(55),
Genero varchar(1),
Email varchar(78),
Telefono varchar(13),
Contraseña varchar(15));

CREATE TABLE password (
    id_password PRIMARY KEY,
    id_Cliente int,
    password_encrypt,
    fecha,
    FOREIGN KEY (id_Cliente) REFERENCES Cliente (id_Cliente)
);

CREATE TABLE configuracion (
    id_configuracion int PRIMARY KEY,
    nombre_empresa-conf varchar(30),
    idioma varchar(30),
    moneda varchar(50)
)

