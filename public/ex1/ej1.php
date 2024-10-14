<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
   if ($_SERVER ["REQUEST_METHOD"] == "POST") {$kilos = $_POST["paquetes"];
   
    }
    $ancho = $_POST["ancho"];
    $largo = $_POST["largo"];
    $alto = $_POST["alto"];
    $peso = $_POST["peso"];
    $cantidad = $_POST["cantidad"];
    $zona = $_POST["zona"];
    $volumen = $ancho * $largo * $alto;

    if ($volumen <= 0.5) {
        $precioBase = $volumen * 50;
    } else if ($volumen <= 1) {
        $precioBase = $volumen * 75;
    } else {
        $precioBase = $volumen * 100;
    }
if ( $peso > 15 ) {
echo "El envío se desestima por exceder el peso máximo";
}
 else if ($peso > 10) {
    $incrementoPeso = 0.5;
} else if ($peso > 5) {
    $incrementoPeso = 0.25;
}
$precioConIncremento = $precioBase * (1 + $incrementoPeso);

if ($zona === 'baleares_aereo') {
    $costeZona = $precioConIncremento * 0.1;
} else if ($zona === 'canarias') {
    $costeZona = $precioConIncremento * 0.1;
}
echo "El precio total del envío es:" .$preciototal;
    ?>
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <label for="largo">LARGO:</label>
        <input type="number" id="largo" name="largo" value="">
        <label for="alto">ALTO:</label>
        <input type="number" id="alto" name="alto" value="">
        <label for="zona">ZONA:</label>
        <input type="number" id="zona" name="zona" value="">
        <label for="ancho">ANCHO:</label>
        <input type="number" id="ancho" name="ancho" value="">
        <label for="cantidad">CANTIDAD:</label>
        <input type="number" id="cantidad" name="cantidad" value="">
        <label for="peso">PESO:</label>
        <input type="number" id="peso" name="peso" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>