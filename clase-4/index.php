<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 4</title>
</head>
<body>
    <h1>Formulario usando GET</h1>

    <!-- Pedir nombre y edad -->
    <form method="get">
        <div>
            <!-- label permite dar una descripcion/intruccion de que se espera que el usuario coloque en el campo -->
            <!-- El for atributte debe ser igual al id del campo al que se relaciona -->
            <label for="nombre">Ingresa tu nombre:</label>

            <!-- con input podemos hacer un campo de formulario, dependiendo del type del input sera el tipo de campo -->
            <input type="text" id="nombre" placeholder="Jonh Doe" name="nombre"/>
        </div>

        <div>
            <!-- label permite dar una descripcion/intruccion de que se espera que el usuario coloque en el campo -->
            <label for="edad">Ingresa tu edad:</label>
            <input type="number" id="edad" min="1" max="120" name="edad"/>
        </div>
        <button type="submit">Enviar</button>
    </form>
    <?php 

        /* si existe/se envio nombre, ahi mostrame el h1 */
        /* &&: y logico o AND, si el nombre y la edad existen ejecuto x cosa */
        if( isset($_GET['nombre']) && isset($_GET['edad']) ){
            $nombre = $_GET['nombre'];
            $edad = $_GET['edad'];
            echo '<h1>SOS ' . $nombre . '</h1>';
            echo '<p>Tenes ' . $edad . ' años</p>';
            if($edad >= 18){
                echo '<h2>Sos mayor de edad</h2>';
            }
            else{
                echo '<h2>Sos menor de edad</h2>';
            }
        }
        else{
            echo '<span>Estamos aguardando a que completes el formulario..</span>';
        }
        
    ?>
</body>
</html>

