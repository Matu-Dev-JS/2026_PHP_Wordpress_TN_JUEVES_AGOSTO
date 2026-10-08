<!-- Quiero registrar un usuario -->
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

    /* Creamos los datos del usuario a registrar */
    $nombre = 'Pepita';
    $email = 'pepita@gmail.com';
    $password = '123456';

    /* Que accion queremos ejecutar en la DB */
    /* Para crear usuarios usamos la sentencia INSERT */
    /* :nombre o :email sirve para indicar por referencia que valores se deben llenar cuando se ejecute esta query */
    $sql_query = 'INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)';

    /* 
    prepare es un metodo que valida que la consulta SQL no tenga inyecciones SQL
    */
    $safe_query = $conexion_DB->prepare($sql_query);

    $safe_query->execute(
        [
            ":nombre" => $nombre,
            ":email" => $email,
            ":password" => $password
        ]
    );

?>