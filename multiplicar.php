
   
    <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="author" content="Dominic Obil">
    <title>Tabla de Multiplicar</title>
</head>
<body>

<h2>Ingrese un número entre 1 y 10</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Número: <input type="text" name="numero" placeholder="Ingrese un número del 1 al 10"><br>
    <input type="submit" name="submit" value="Mostrar Tabla de Multiplicar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];

    if (is_numeric($numero) && $numero >= 1 && $numero <= 10) {
    
        $numero = intval($numero);

 
        echo "<h2>Tabla de Multiplicar del $numero:</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>
