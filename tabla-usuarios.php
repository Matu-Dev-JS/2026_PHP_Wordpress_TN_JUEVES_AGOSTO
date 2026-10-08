<?php 
    /* Necesito conectarme a la DB para ejecuta un codigo de insercion */
    //Para poder trabajar con la DB usamos PDO
    //Te permite conectarte a DB
    //Creamos con new PDO la instancia de conexion a la DB
    $conexion_DB = new PDO(
        'mysql:host=localhost;dbname=2026_utn_php_oct',
        'root', /* Nombre de usuario */
        '' /* Password */
    );

    $sql = 'SELECT * FROM usuarios';

    $query = $conexion_DB->query($sql);

    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC)

?>


<!-- 
Recorrer una lista de usuarios
Nos sirve para recorrer listas, en este caso la lista de usuarios
Si tengo 4 usuarios significa que el <div></div> se imprimira 4 veces, 1 por cada usuario

-->
<h1>Tabla de usuarios</h1>
<?php
    foreach ($usuarios as $usuario):
?>
    <div>
        <h2><?= $usuario['nombre']?></h2>
        <h2><?= $usuario['email']?></h2>
    </div>

<?php endforeach; ?>