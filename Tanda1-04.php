<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->

    <?php
        echo $_POST['x']. "+". $_POST['y']. " = ". ($_POST['x']+$_POST['y']);
        echo "<br>";
        echo $_POST['x']. "-". $_POST['y']. " = ". ($_POST['x']-$_POST['y']);
        echo "<br>";
        echo $_POST['x']. "*". $_POST['y']. " = ". ($_POST['x']*$_POST['y']);
        echo "<br>";
        echo $_POST['x']. "/". $_POST['y']. " = ". ($_POST['x']/$_POST['y']);
        echo "<br>";
    ?>
</body>
</html>