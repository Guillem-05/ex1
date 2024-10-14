<!DOCTYPE html>
<html>
<head>
    <title>Suma de 4 números</title>
</head>
<body>
    <h1>Suma de 4 números</h1>
    
    <?php
   $base = $_GET["base"];
   $altura = $_GET["altura"];
   $area = $base*$altura;
    echo $area;
        ?>
</body>
</html>