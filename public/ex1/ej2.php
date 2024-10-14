<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
    }
    

for ($i = $numero; $i > 1; ) {
    $sucesion[] = $i;
    if ($i % 2 == 0) {
        $i = $i / 2; 
    } else {
        $i = $i * 3 + 1; 
    }
}
echo "esto es $sucesion"
?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>