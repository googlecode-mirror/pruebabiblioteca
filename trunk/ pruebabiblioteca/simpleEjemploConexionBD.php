<?php

mysql_connect('localhost', 'root' . '')
        or die('No se pudo establecer la conexion');
mysql_select_db('sesion')
        or die("No se pudo seleccionar la Base de Datos");
?>
