<?php
    include_once 'conexion.php';
    include_once 'Venta.php';
    $database = new Conexion();
    $db=$database->getConnection();
    $venta = new Venta($db);
    $stmt = $venta->leer();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Conexion</title>
</head>
<body>
    <div align="center">
        <table>
            <thead>
                <tr>
                <th>IDVENTA</th>
                <th>CLIENTE</th>
                <th>MEDICAMENTO</th>
                <th>CANTIDAD</th>
                <th>FECHA</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            extract($row);
                echo "<tr>
                    <td>{$idventa}</td>
                    <td>{$nombrecliente}</td>
                    <td>{$nombremedicamento}</td>
                    <td>{$cantidad}</td>
                    <td>{$fecha}</td>
                </tr>"
            ?>
            </tbody>
        </table>

    </div>
</body>
</html>