<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos Asociativos</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <h3>Primer Empleado</h3>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombreEmpleado1" required></td>
            </tr>

            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellidoEmpleado1" required></td>
            </tr>

            <tr>
                <td>Cedula:</td>
                <td><input type="text" name="cedulaEmpleado1" required></td>
            </tr>

            <tr>
                <td>Sueldos:</td>
                <td><input type="text" name="sueldoEmpleado1" required></td>
            </tr>

            <tr>
                <td>Departamento:</td>
                <td><input type="text" name="departamentoEmpleado1" required></td>
            </tr>
            
            <tr>
                <td>Lugar:</td>
                <td><input type="text" name="lugarEmpleado1" required></td>
            </tr>
        </table>
        <br>

        <h3>Segundo Empleado</h3>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombreEmpleado2" required></td>
            </tr>

            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellidoEmpleado2" required></td>
            </tr>

            <tr>
                <td>Cedula:</td>
                <td><input type="text" name="cedulaEmpleado2" required></td>
            </tr>

            <tr>
                <td>Sueldos:</td>
                <td><input type="text" name="sueldoEmpleado2" required></td>
            </tr>

            <tr>
                <td>Departamento:</td>
                <td><input type="text" name="departamentoEmpleado2" required></td>
            </tr>
            
            <tr>
                <td>Lugar:</td>
                <td><input type="text" name="lugarEmpleado2" required></td>
            </tr>
        </table>
        <br>

        <h3>Tercer Empleado</h3>
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombreEmpleado3" required></td>
            </tr>

            <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellidoEmpleado3" required></td>
            </tr>

            <tr>
                <td>Cedula:</td>
                <td><input type="text" name="cedulaEmpleado3" required></td>
            </tr>

            <tr>
                <td>Sueldos:</td>
                <td><input type="text" name="sueldoEmpleado3" required></td>
            </tr>

            <tr>
                <td>Departamento:</td>
                <td><input type="text" name="departamentoEmpleado3" required></td>
            </tr>
            
            <tr>
                <td>Lugar:</td>
                <td><input type="text" name="lugarEmpleado3" required></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="btn" value="enviar">
        <input type="submit" value="limpiar">
    </form>
</body>

<?php
    if(isset($_POST['btn']) && $_POST['btn'] == 'enviar'){

        $nombreEmpleado1 = $_POST['nombreEmpleado1'];
        $apellidoEmpleado1 = $_POST['apellidoEmpleado1'];
        $cedulaEmpleado1 = $_POST['cedulaEmpleado1'];
        $sueldoEmpleado1 = $_POST['sueldoEmpleado1'];
        $departamentoEmpleado1 = $_POST['departamentoEmpleado1'];
        $lugarEmpleado1 = $_POST['lugarEmpleado1'];


    
        $nombreEmpleado2 = $_POST['nombreEmpleado2'];
        $apellidoEmpleado2 = $_POST['apellidoEmpleado2'];
        $cedulaEmpleado2 = $_POST['cedulaEmpleado2'];
        $sueldoEmpleado2 = $_POST['sueldoEmpleado2'];
        $departamentoEmpleado2 = $_POST['departamentoEmpleado2'];
        $lugarEmpleado2 = $_POST['lugarEmpleado2'];


        
        $nombreEmpleado3 = $_POST['nombreEmpleado3'];
        $apellidoEmpleado3 = $_POST['apellidoEmpleado3'];
        $cedulaEmpleado3 = $_POST['cedulaEmpleado3'];
        $sueldoEmpleado3 = $_POST['sueldoEmpleado3'];
        $departamentoEmpleado3 = $_POST['departamentoEmpleado3'];
        $lugarEmpleado3 = $_POST['lugarEmpleado3'];

        if(!is_numeric($cedulaEmpleado1) && !is_numeric($cedulaEmpleado2) && !is_numeric($cedulaEmpleado1)){
            ?>
            <h4>cedula incorrecta</h4>
            <?php
        } else {
            $empleado1 = array(
                'nombre' => $nombreEmpleado1,
                'apellido' => $apellidoEmpleado1,
                'cedula' => $cedulaEmpleado1,
                'sueldo' => $sueldoEmpleado1,
                'departamento' => $departamentoEmpleado1,
                'lugar' => $lugarEmpleado1
            );

            $empleado2 = array(
                'nombre' => $nombreEmpleado2,
                'apellido' => $apellidoEmpleado2,
                'cedula' => $cedulaEmpleado2,
                'sueldo' => $sueldoEmpleado2,
                'departamento' => $departamentoEmpleado2,
                'lugar' => $lugarEmpleado2
            );

            $empleado3 = array(
                'nombre' => $nombreEmpleado3,
                'apellido' => $apellidoEmpleado3,
                'cedula' => $cedulaEmpleado3,
                'sueldo' => $sueldoEmpleado3,
                'departamento' => $departamentoEmpleado3,
                'lugar' => $lugarEmpleado3
            );
            ?>
            <br>

            <?php
            foreach($empleado1 as $datosEmpleados => $dato){
                print "$datosEmpleados = $dato" . "<br>";
            }
            ?>
            <br>

            <?php
            foreach($empleado2 as $datosEmpleados2 => $dato2){
                print "$datosEmpleados2 = $dato2" . "<br>";
            }
            ?>
            <br>
            
            <?php
            foreach($empleado3 as $datosEmpleados3 => $dato3){
                print "$datosEmpleados3 = $dato3" . "<br>";
            }
        }
    }
?>
</html>