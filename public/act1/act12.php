<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>act1</title>
</head>
<body>
    <h1> Crustáceo Crujiente
    </h1>
    <?php

$personas = 100;
$costeplato = 0;
if ($personas > 300){
    $costeplato = 75;
} else{ 
    if ($personas > 200){
    $costeplato = 85;
    }
}
echo "El coste del plato es: " .$costeplato; 

?>
</body>
</html>