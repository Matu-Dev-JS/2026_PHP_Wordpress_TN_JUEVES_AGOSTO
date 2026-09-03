<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    Funciones en PHP 
        Una funcion en escencia permite guardar en memoria una accion o formula.


    Ignorar por el momento
        mail
        funciones relacionadas a MySQL
    -->

    <?php
        //Definicion (Crear la funcion)
        //mostrarMensajeBienvenida es el identificador de mi funcion
        function mostrarMensajeBienvenida (){
            //Dentro de las llaves definimos las acciones de nuestra funcion
            echo "Hola mi nombre es Pepe";
        } 
        
        //invocacion o llamada o ejecucion de la funcion (usar la funcion)
        //mostrarMensajeBienvenida();



        //los parametros nos permiten enviar informacion a una funcion
        //la funcion saludar recibe el parametro nombre
        function saludar($nombre){
            echo "hola " . $nombre;
            echo '<br/>';
        }

        //saludar("Juan");
        //saludar('Maria');

        /* 
        Crear una funcion llamada calcularIva que recibira un precio y imprimira en pantalla en 21% de ese precio
        Ejemplo:
            calcularIva(100)
                Debe mostrar: echo El iva del producto es $21
            calcularIva(200)
                Debe mostrar: echo El iva del producto es $42
        */
        /*  
        const PORCENTAJE_IVA = 21;

        function calcularIva($precio){
            $iva = $precio * (PORCENTAJE_IVA / 100);
            echo "El valor del iva para el precio $" . $precio . " es $" . $iva;
            echo '<br/>';
        }

        calcularIva(100);
        calcularIva(200); 
        */
        /* 
            f(x) = x * 3 + 1
            f(x = 2) = 7
            f(x = 3) = 10
        */

        //Cual deberia ser la responsabilidad de calcularIva?
        //Es calcular el iva de x precio

        const PORCENTAJE_IVA = 21;

        function calcularIva($precio){
            return $precio * (PORCENTAJE_IVA / 100);
        }

        $precioDeSilla = 300;
        $ivaDeSilla = calcularIva($precioDeSilla);
        echo 'El iva de la silla es $' . $ivaDeSilla;


        /* 
        duplicar($numero) y devolver el doble
        promediar($numero1, $numero2, $numero3) y devolver el promedio entre esos 3 numeros
        sumar($numero1, $numero2) y devolver la suma de esos 2 numeros
        */
    ?>
</body>
</html>
