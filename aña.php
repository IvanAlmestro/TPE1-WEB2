<?php
echo "<head>";
echo "<link rel='stylesheet' href='estilo.css'>";
echo "</head>";


/* 
4) Usando la tabla pagos de la base de datos del punto 3, desde PHP:
Liste todos los registros (filas) de la tabla en una tabla HTML.
*/


//Esta funcion obtiene los pagos de la DB
function getPagos(){
    //1. Abrimos la conexion con la DB
    $db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8', 'root', '');

    //2. Ejecutamos la consulta SQL tiene 2 subpasos (prepare y execute)
    $query = $db->prepare('SELECT * FROM pagos');
    $query->execute();

    //3. Obtener los datos de la consulta (para procesarlos)
    $pagos = $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo del formato que le diga con -todos- los pagos.

    //4. en PDO(en PHP)  se cierra la conexion con la DB solo.
    return $pagos;
}

$pagos = getPagos();
//primero el arreglo y despues el item en php
// en java se accede con el punto en php con -> la flecha.
