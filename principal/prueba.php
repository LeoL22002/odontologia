
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pruebasss</title>
</head>
<body>
<form action="">
<?php
    include('../conexion.php');
    $sql=mysqli_query($conexion,"SELECT * FROM especialidad");
    while ($res=mysqli_fetch_array($sql)) {
        $id_esp=$res["id_esp"];
        $esp=$res["des_esp"];
        echo "<input type='checkbox' value=$id_esp/>$esp";
    }
    ?>
    <button type="submit">Osker</button>
</form>
</body>
</html>