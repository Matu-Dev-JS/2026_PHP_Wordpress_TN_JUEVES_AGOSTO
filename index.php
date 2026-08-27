<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <span>Hola</span>
    <br>
    <a href="">Hola</a>
    <br>
    <?php
        /* 
        La variable sirve para guardar informacion en el programa
        Ejemplo: Yo me llamo {nombre}
        Las variables en PHP se declaran con $ al inicio mas el nombre del identificador de la variable
        */
        /* 
        Una forma de nombrar las variables es camelCase o snake_case
        */
    

        $nombre="pepe";

        /* Una variable puede cambiar de valor a lo largo de la ejecucion del programa */
        /* Asi se re-asigna una variable en PHP */
        $nombre='juan';


        $edad=25;
        $altura=1.73;

        //Esto es un dato booleano
        //Hay solo 2 valores booleanos true y false
        $esAdmin=true;

        /* 
        el . es el operador de concatenacion
        Concatenar es la union de 2 textos
        */
        
        echo "Hola " . $nombre;

        //br es una etiqueta de HTML que nos permite hacer un salto de linea
        echo "<br>";

        //Para averiguar que tipo de dato es una variable
        echo gettype($nombre);
        echo "<br>";
        echo gettype($edad);
        echo "<br>";
        echo gettype($altura);
        echo "<br>";
        echo gettype($esAdmin);

        //Constantes
        //Las constantes son variables que no cambiaran de valor a lo largo de la ejecucion del programa
        //Las constantes se escriben en UPPER_SNAKE_CASE
        
        const PI = 3.14;
        const IVA = 21;
        const URL_MERCADO_PAGO = 'https://mercadopago.com.ar';
        const APP_VERSION = '0.0.1';

        /* 
        colorFondo var
        idiomaSeleccionado var
        contraseniaDeDatabase const
        idiomaDefault const
        */

        //TODO: Averiguar porque los todo salen resaltados


        //operadores aritmeticos
        /* 
        *: multiplicar
        /: division
        +: sumar
        -: resta
        %: resto
        */
        $precio = 1000;
        $iva_del_producto= $precio * (IVA / 100);
        echo "<br>";
        echo $iva_del_producto;

        echo "<br>";
        echo 9 % 2;
        echo "<br>";
        echo 10 % 2;


        //Comparadores:
        /* 
        ==: igualdad
        !=: diferencia (si un dato es distinto a otro)
        >: mayor a
        <: menor a
        >=: mayor o igual
        <=: menor o igual
        */

        echo "<br>";
        echo 1 == 9;
    ?>  
</body>
</html>

