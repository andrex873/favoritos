<?php 
// crear tabla fvaoritos
$conexion = sqlite_open("favoritos.db") or die("No se pudo crear la conexión");
$consulta = 
<<<SQL
CREATE TABLE favoritos(
    usuario char(40) not null,
    clave char(40) not null,
    titulo char(40) not null,
    direccion char(150) not null,
    categoria char(40),
    comentario char(200),
    valoracion int
)
SQL;
$resultado = sqlite_exec($consulta);
sqlite_close($conexion);
// crear tabla usuarios
// crear tabla logs
?>